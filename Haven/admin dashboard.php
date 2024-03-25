
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Bake Haven Product Management</title>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f7f7f7;
    margin: 0;
    padding: 0;
}

.container {
    width: 80%;
    margin: auto;
    overflow: hidden;
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

header {
    background: #50b3a2;
    color: white;
    padding: 20px 0;
    border-bottom: #e8491d 3px solid;
}

header a {
    color: #ffffff;
    text-decoration: none;
    text-transform: uppercase;
    font-size: 16px;
}

header ul {
    padding: 0;
    list-style: none;
}

header li {
    display: inline;
    padding: 0 20px;
}

header #branding {
    float: left;
}

header #branding h1 {
    margin: 0;
}

header nav {
    float: right;
    margin-top: 10px;
}

header .highlight, header .current a {
    color: #e8491d;
    font-weight: bold;
}

header a:hover {
    color: #ffffff;
    font-weight: bold;
}

label {
    display: block;
    margin-top: 10px;
}

input[type="text"],
input[type="number"],
textarea {
    width: 100%;
    padding: 8px;
    margin-top: 5px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

button {
    background-color: #e8491d;
    color: white;
    border: none;
    cursor: pointer;
    padding: 10px 20px;
    border-radius: 5px;
    margin-top: 10px;
}

button:hover {
    background-color: #ff6b4a;
}

</style>
</head>
<body>
<header>
  <div class="container">
    <div id="branding">
      <h1><span class="highlight">Bake Haven Bakery </span></h1>
    </div>
    <nav>
      <ul>
        <li class="current"><a href="#">Welcome, Admin</a></li>
        <li class="current"><a href="Home Bake Haven">Back Home</a></li>
        
      </ul>
    </nav>
  </div>
</header>

<div class="container">
  <form id="productForm" method="post" action="Admin.php">
    <input type="hidden" id="productId" name="id">
    <label for="productName">Name:</label>
    <input type="text" id="productName" name="name" required>
    <label for="productDescription">Description:</label>
    <textarea id="productDescription" name="description" required></textarea>
    <label for="productPrice">Price:</label>
    <input type="number" id="productPrice" name="price" required>
    <button type="button" name="add_product" onclick="addProduct()">Add Product</button>
    <button type="button" name="update_product "onclick="updateProduct()">Update Product</button>
    <button type="button" name="delete_product" onclick="deleteProduct()">Delete Product</button>
    <button type="button" name="update_product "onclick="updateProduct()">view Product</button>

  </form>
</div>


<script>
  function addProduct() {
    document.getElementById('productForm').action = 'Admin.php';
    document.getElementById('productForm').submit();
  }

  function updateProduct() {
    document.getElementById('productForm').action = 'Admin.php';
    document.getElementById('productForm').submit();
  }

  function deleteProduct() {
    document.getElementById('productForm').action = 'Admin.php';
    document.getElementById('productForm').submit();
  }
</script>

</body>
</html>
