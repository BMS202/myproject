<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bake Haven</title>
 <link rel="icon" href="images/cupcake.jpeg" type="image/x-icon">
    <link rel="stylesheet" href="StyleBH.css">
</head>
<body>

        <!-- book section starts  -->

        <section class="book" id="book">

            <h1 class="heading">
            <span>Order Here</span>
            </h1>
        
            <div class="row">
        
                <div class="image">
                    <img src="images/Cake 1.png" alt="" width="648" height="515">
                </div>
        
                <form action="order.php" method="post">
                    <div class="selection">
                        <h3>What are you looking for?</h3>
                        
                    <select name="productType" placeholder="product_selection" required>
                      <option value="cakes">Cakes</option>
                      <option value="cookies">Cookies</option>
                     <option value="ibiraha">Ibiraha</option>
                     <option value="capati">Capati</option>
                     <option value="pastries">Pastries</option>
                             
                    </select>
                                
                    </div>
                    <div class="selection">
                        <h3>For Cakes and Cookies Select Flavors</h3>
                        
                    <select name="flavor" placeholder="product_selection" required>
                      <option value="vanilla">vanilla</option>
                      <option value="Chocolate">Chocolate</option>
                     <option value="Stawberry">Strawberry</option>
                     <option value="Lemon">Lemon</option>
                     <option value="Almond">Almond</option>
                     <option value="Coconut">Coconut</option>
                     <option value="none">none</option>
                             
                    </select>
                    
                    </div>
                    <div class="inputBox">
                        <h3>Deadline</h3>
                        <input type="date" id="deadline" name="deadline" required>
                    </div>
                    <div class="inputBox">
                        <h3>Your email here</h3>
                        <input type="email" placeholder="example@haven.rw" name="email" required>
                    </div>
                   
                    <div class="selection">
                        <h3>Delivery Option</h3>
                        
                    <select name="deliveryOption" id="product_selection" required>
                      <option value="Home Delivery">Home Delivery</option>
                      <option value="Self Pickup">Self Pickup</option>
                     <option value="Others">Others</option>
                    </select>
                                
                    </div>
                    <input type="submit" class="btn" value="Order now" name="order">
                </form>
        
            </div>
        
        </section>
        
        <!-- book section ends -->
                
    
</body>
</html>