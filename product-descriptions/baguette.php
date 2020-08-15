<!--
    P3 - Product page description
    Ejazali Rezayi - 40101892
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Description</title>
    <link rel="stylesheet" href="../css/p3.css">
    <script src="../scripts/product-descriptions.js"></script>
</head>

<body onload="updateSubtotal(3.99)">
    <header>
        <div class="product-name-header">
            Product Description - Baguette
        </div>
    </header>

    <nav>
        <ul>
            <li><a href="../index.html">Home Page</a></li>
            <li><a href="../aisles/bread.html">Return to Aisle</a></li>
            <li><a href="../shopping-cart/index.html">Shopping Cart</a></li>
        </ul>
        <div class="register-log-in">
            <a href="../user/register.html"><button class="user-button" type="button" name="user-button">Register</button></a>
            <a href="../user/login.html"><button class="user-button" type="button" name="login-button">Log In</button></a>
        </div>
    </nav>


    <div class="description">
        <div class="image">
            <img src="../images/baguette.jpg" alt="Baguette" width="200px" height="200px" />
        </div>
        <h2>Baguette</h2>
        <p>3.99$/each</p>
        <p>Weight: 325 g</p>
        <h3>Product Description</h3>
        <p>The whole description The whole description The whole description The whole description The whole description The whole description The whole description The whole description The whole description The whole description The whole description The
            whole description</p>
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
            <input type="number" id="quantity" name="quantity" min="1" value=1 size="2" onchange="updateSubtotal(3.99)">
            <label for="type">Type:</label>
            <select id="type" name="type">
                <option>White</option>
                <option>Whole wheat</option>
            </select>
            Subtotal: <span id="subtotal"></span>
            <div class="addtocartposition">
                <a href="../shopping-cart/index.html"><button class="addtocart" type="button" name="addtocart-button">Add to Cart</button></a>
            </div>
        </form>
    </div>

    <footer></footer>

</body>

</html>