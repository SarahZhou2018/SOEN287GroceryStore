<!--
    P3 - Product page description
    Shi Qi Zhou - 40163947
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/p3.css">
    <title>Romaine Lettuce</title>
    <script src="../scripts/product-descriptions.js"></script>
</head>

<body onload="updateSubtotal(5)">
    <header>
        <div class="product-name-header">
            Product Description - Romaine Lettuce
        </div>
    </header>
    <nav>
        <ul>
            <li><a href="../index.html">Home Page</a></li>

            <li><a href="../aisles/fruits-vegetables.html">Return to Aisle</a></li>

            <li><a href="../shopping-cart/index.html">Shopping Cart</a></li>
        </ul>
        <div class="register-log-in">
            <a href="../user/register.html"><button class="user-button" type="button" name="user-button">Register</button></a>
            <a href="../user/login.html"><button class="user-button" type="button" name="login-button">Log In</button></a>
        </div>
    </nav>


    <div class="description">
        <div class="img">
            <img src="../images/lettuce.jpeg" alt="Romaine Lettuce" width="200px" height="200px" />
        </div>
        <h2>Romaine Lettuce</h2>
        <p>5.00$/each</p>
        <p>Weight: 50g avg.</p>
        <h3>Product Description</h3>
        <p>Product of U.S.A. or Mexico. Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel consectetur su.<br/></p>
        <button class="addtocart" type="button" name="moredesc-button" onClick="toggleDescription()">More
            description</button><br><br>
        <div id="long-desc" style="display:none">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel consectetur sunt fuga commodi ratione saepe
            quaerat. Quod modi nesciunt earum hic, eligendi esse vitae quis velit quisquam autem mollitia ea? Lorem
            ipsum, dolor sit amet consectetur adipisicing elit. Beatae vero earum ut perspiciatis dolores sapiente
            inventore pariatur facilis! Unde deleniti hic autem error molestias vel illum nostrum reprehenderit
            atque debitis.
        </div>
        <br />

        <form action="../shopping-cart/index.html">
            <label for="quantity">Quantity:</label>
            <input type="number" id="quantity" name="quantity" min="1" value=1 size="2" onchange="updateSubtotal(5)">
            <label for="type">Type:</label>
            <select id="type" name="type">
                    <option value="1">Organic</option>
                    <option value="2">Regular</option>
            </select>
            Subtotal: <span id="subtotal"></span>
            <div class="addtocartposition">
                <a href="../shopping-cart/index.html"><button class="addtocart" type="button" name="addtocart-button">Add to Cart</button></a>
            </div>
    </div>
    <footer></footer>
</body>

</html>