<?php 
include_once "global.php";
generateHeader("Register");

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];

    if(strlen($username) > 30 || strlen($password) > 60 || $password !== $repassword)
    {
        $error = "Username or password is not complying the rules";
    }
    else
    {
        // Validate user from database
    $stmt = $conn->prepare("SELECT ID, username FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user) 
    {
        $error = "User with username: " . $user['username'] . " already exists.";
    }
    else 
    {
        $stmt = $conn->prepare("INSERT INTO users (ID, username, password) VALUES(NULL, ?, ?);");
        $stmt->bind_param("ss", $username, $password);

        if ($stmt->execute()) {
            header("Location: login.php");
            exit;
        } else {
            $error = "Error: Could not register user.";
        }
    }
    }
    
}

?>

<body>

    <h1 id="logo">Screen Log</h1>

    <div class="formular">
        <h2>Register</h2> 

        <?php if (isset($error)) echo "<p class='error'>$error</p>"; ?>
        <form action="register.php" method="post">
            <label>Username</label> <br>
            <input type="text" id="username" name="username" placeholder="Username" required oninput="validateUsername()"> <br>
            <small id="error-message-us" style="color: red;"></small> <br>
            <label>Password</label> <br>
            <input type="password" id="password" name="password" placeholder="Password" required oninput="validatePassword()"> <br>
            <small id="error-message-ps" style="color: red;"></small> <br>
            <label>Reenter Password</label> <br>
            <input type="password" id="repassword" name="repassword" placeholder="Reenter Password" required oninput="validateReenteredPassword()"> <br>
            <small id="error-message-rps" style="color: red;"></small> <br>
            <button type="submit">Register</button> <br>

            <a href="login.php">I already have an account</a>
        </form>
    </div>
</body>
<footer>
    <script src="../JS/app.js"></script>
</footer>
