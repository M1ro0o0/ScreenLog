<?php 
include_once "global.php";
generateHeader("Log In");

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(strlen($username) > 30 || strlen($password) > 60)
    {
        $error = "Username or password is incorrectly formated";
    }
    else
    {
        // Validate user from database
    $stmt = $conn->prepare("SELECT ID, username, password FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user && ($password === $user['password'])) 
    {
        // Store user info in session
        $_SESSION['user_id'] = $user['ID'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['logged_in'] = true;

        header("Location: home.php"); // Redirect to home page after login
        exit;
    }
    else 
    {
        $error = "Username or password is incorrect";
    }
    }
}
?>

<body>

    <h1 id="logo">Screen Log</h1>

    <div class="formular">
        <h2>Log In</h2> 

        <?php if (isset($error)) echo "<p class='error'>$error</p>";?>
        <form action="login.php" method="post">
            <label>Username</label> <br>
            <input type="text" id="username" name="username" placeholder="Username" required oninput="validateUsername()"> <br>
            <small id="error-message-us" style="color: red;"></small> <br>
            <label>Password</label> <br>
            <input type="password" id="password" name="password" placeholder="Password" required oninput="validatePassword()"> <br>
            <small id="error-message-ps" style="color: red;"></small> <br>
            <button type="submit">Log In</button> <br>

            <a href="register.php">I do not have an account yet</a>
        </form>
    </div>
</body>
<footer>
    <script src="../JS/app.js"></script>
</footer>
</html>
