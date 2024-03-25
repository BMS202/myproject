<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = " ";
$dbname = "bake haven";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Add Product
if(isset($_POST['add_product'])){
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    
    $sql = "INSERT INTO products (name, description, price) VALUES ('$name', '$description', '$price')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Product added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Update Product
if(isset($_POST['update_product'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    
    $sql = "UPDATE products SET name='$name', description='$description', price='$price' WHERE id=$id";
    
    if ($conn->query($sql) === TRUE) {
        echo "Product updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Delete Product
if(isset($_POST['delete_product'])){
    $id = $_POST['id'];
    
    $sql = "DELETE FROM products WHERE id=$id";
    
    if ($conn->query($sql) === TRUE) {
        echo "Product deleted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Check if the form is submitted
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
        echo "Invalid email or password. Please try again.";
    }
}
// Close connection
$conn->close();
?>
