<?php

$servername = "localhost";
$db_username = "root";
$db_password = "";
$dbname = "bake haven";

// Connect to the database
$conn = new mysqli($servername, $db_username, $db_password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['sign-up'])) {
    $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $password = md5($_POST['password']);
    $gender = $_POST['gender'];

    if ($fullname != "" && $email != "" && $address != "" && $password != "") {
        $sql = "INSERT INTO signupform (full_name, email, address, password, gender) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssss", $fullname, $email, $address, $password, $gender);

        if ($stmt->execute()) {
            header("Location:login.php");
            echo "Account created successfully";
        } else {
            echo "Error: Failed to create account. " . $conn->error;
        }
      $stmt->close();
    }
    
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
        $email = mysqli_real_escape_string($conn, $_POST["email"]);
        $password = mysqli_real_escape_string($conn, $_POST["password"]);
        
        // Query the database for the user
        $sql = "SELECT * FROM signupform WHERE email = '$email' AND password = '$password'";
        $result = mysqli_query($conn, $sql);
        
        // Check if the user exists
        if (mysqli_num_rows($result) > 0) {
            // User found, redirect to Home Bake Haven page
            header("Location: Home Bake Haven.php");
            exit(); // Ensure no further code execution after redirection
        } else {
            // No user found, display error or redirect to an error page
            echo "Invalid login credentials.";
        }
        
        // Close the database connection
        mysqli_close($conn);
    }
    
    

    
    
    
    
    
    
    
    
    
    
    
    
    
    
}
    ?>




































































































