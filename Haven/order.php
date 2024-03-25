<?php

if (isset($_POST['order'])) {
    // Retrieve form data
    $productType = $_POST['productType'];
    $flavor = isset($_POST['flavor']) ? $_POST['flavor'] : '';
    $deadline = $_POST['deadline'];
    $email = $_POST['email'];
    $deliveryOption = $_POST['deliveryOption'];

    // Database credentials
    $servername = "localhost"; 
    $username = "root"; 
    $password = ""; 
    $database = "bake haven"; 

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    // Prepare and bind SQL statement
    $stmt = $conn->prepare("INSERT INTO orders (productType, flavor, deadline, email, deliveryOption) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $productType, $flavor, $deadline, $email, $deliveryOption);
    // Execute SQL statement
if ($stmt->execute()) {
    echo "<div style='background-color: darkgrey;  border-radius: 20px; color: black; padding: 50px;font-size: 3rem; margin: 10px;'>";
    echo "Order placed successfully!<br>";
    
    // Display order information
    echo "Product Type: " . $productType . "<br>";
    echo "Flavor: " . $flavor . "<br>";
    echo "Deadline: " . $deadline . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Delivery Option: " . $deliveryOption . "<br>";
    echo '<br><a href="online payment.php" style="color: black;  border-radius: 20px;background-color: darkcyan; padding: 5px 10px; text-decoration: none;">Payment Required</a>';
    echo "</div>";
} else {
    echo "<div style='background-color: #ffcccc; padding: 10px; margin: 10px;'>";
    echo "Error: " . $stmt->error;
    echo "</div>";
}


    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>
