<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Admin Login</title>
<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

h2 {
    text-align: center;
    color: #333;
    margin-top: 50px;
}

form {
    width: 50%;
    margin: 0 auto;
    background-color: darkcyan;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

label {
    display: block;
    margin-top: 10px;
}

input[type="email"],
input[type="password"] {
    width: 100%;
    padding: 8px;
    margin-top: 5px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 30px;
}

button {
    background-color: darkorange;
    color: #fff;
    border: none;
    cursor: pointer;
    padding: 10px 20px;
    border-radius: 5px;
}

button:hover {
    background-color: #0056b3;
}

button, input[type="email"], input[type="password"] {
    display: block;
    margin: 0 auto;
}

</style>
</head>
<body>
<h2>Admin Login</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>
    
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br><br>
    
    <button type="submit" name="submit">Login</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Define the admin email and password
    $adminEmail = "admin@gmail.com";
    $adminPassword = "12345";

    // Get the input values from the form
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if the input email and password match the admin credentials
    if ($email == $adminEmail && $password == $adminPassword) {
        // Redirect to the admin dashboard
        header("Location: admin Dashboard.php");
        exit;
    } else {
        // Display an error message if the credentials are incorrect
        echo "<p style='color: red;'>Invalid email or password. Please try again.</p>";
    }
}
?>
</body>
</html>
