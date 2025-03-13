console.log("Script is loaded!");

function validateUsername() {
    // Get the value of the username field
    var usernameInput = document.getElementById("username");
    var errorMessage = document.getElementById("error-message-us");

    // Check if the username length is less than 30 characters
    if (usernameInput.value.length > 30) {
        errorMessage.textContent = "Username cannot be longer than 30 characters.";
        usernameInput.classList.add("error"); // Add error class
    } else {
        errorMessage.textContent = ""; // Clear error message
        usernameInput.classList.remove("error"); // Remove error class
    }
}

function validatePassword() {
    // Get the value of the username field
    var passwordInput = document.getElementById("password");
    var errorMessage = document.getElementById("error-message-ps");

    // Check if the username length is less than 60 characters
    if (passwordInput.value.length > 60) {
        errorMessage.textContent = "Password cannot be longer than 60 characters.";
        passwordInput.classList.add("error"); // Add error class
    } else {
        errorMessage.textContent = ""; // Clear error message
        passwordInput.classList.remove("error"); // Remove error class
    }
}

function validateReenteredPassword()
{
    var passwordInput = document.getElementById("password");
    var rePasswordInput = document.getElementById("repassword");
    var errorMessage = document.getElementById("error-message-rps");

    if (passwordInput.value !== rePasswordInput.value) {
        errorMessage.textContent = "Password are not the same";
        rePasswordInput.classList.add("error"); // Add error class
    } else {
        errorMessage.textContent = ""; // Clear error message
        rePasswordInput.classList.remove("error"); // Remove error class
    }

}