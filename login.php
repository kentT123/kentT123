<?php
session_start();
include('database.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $_SESSION['username'] = $username;
        header("Location: index.php");
        exit();
    } else {
        echo "Invalid login credentials.";
    }
}
?>

<html>
<head>
</head>
<style> 
/* style.css */

/* Reset some default browser styles */
body, h2, form {
    margin: 0;
    padding: 0;
}

/* Center the container vertically and horizontally */
.container {
    width: 100%;
    height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    background-color: #f0f0f0; /* Background color */
}

/* Style the login form */
h2 {
    font-size: 24px;
    margin-bottom: 20px;
}

form {
    background-color: #ffffff; /* Form background color */
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* Box shadow for a subtle effect */
}

/* Style the form inputs */
input[type="text"],
input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 3px;
    font-size: 16px;
}

/* Style the login button */
input[type="submit"] {
    background-color: #007BFF; /* Button background color */
    color: #fff; /* Text color */
    border: none;
    padding: 10px 20px;
    border-radius: 3px;
    font-size: 16px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #0056b3; /* Button background color on hover */
}

/* Style the "Don't have an account?" link */
p {
    margin-top: 15px;
    font-size: 16px;
}

a {
    text-decoration: none;
    color: #007BFF; /* Link color */
}

a:hover {
    text-decoration: underline;
}

</style>
<body>
    <div class="container">
        <h2>Login</h2>
        <form method="post" action="login.php">
            <input type="text" name="username" placeholder="Username" required><br><br>
            <input type="password" name="password" placeholder="Password" required><br><br>
            <input type="submit" value="Login">
        </form>
        <p>Don't have an account? <a href="register.php">Register</a></p>
    </div>
</body>
</html>
