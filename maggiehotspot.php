<?php

session_start();

if(isset($_SESSION['regno'])){
    echo '
<html>
    <head>
        <title>MAGGIE HOSTSPOT</title>
        <style>
            body{
                color: #142d4c;
                background-color: #ececec;
            }

            .div1 {
                align-items: center;
                height: 50px;
                width: 100%;
                border: 2px solid #142d4c;
                border-bottom: 0px;
                background-color: #9fd3c7;
            }

            .div2 {
                width: 100%;
                border: 2px solid #142d4c;
                background-color: #ececec;
            }

            .container{
                display: flex;
                width: 100%;
                margin: 10px;
            }

            .container1 {
                height: 210px;
                width: 565px;
                display: flex;
                background-color: #9fd3c7;
                border: 1px solid #142d4c;
                border-radius: 10px;
                color: #142d4c;
                margin: 10px;
            }
            
            .image {
                flex-basis: 100%
            }

            img{
                width: 210px;
                border-radius: 10px;
                align: right;
            }

            .text{
                padding-right: 10px;
            }

            .btn {
                color:#142d4c;
                padding: 2px 10px;
                border: 1.5px solid #142d4c;
                background-color: transparent;
            }

            .btn:hover {
                background-color: #ececec;
            }

            .btn1 {
                height: 40px;
                width: 98.3%;
                color:#142d4c;
                margin: 20px;
                padding: 2px 10px;
                border: 1.5px solid #142d4c;
                background-color: #9fd3c7;
            }

            .btn1:hover {
                background-color: #ececec;
            }

            .btn2 {
                color:#142d4c;
                font-size:x-large;
                height: 100%;
                width: 19.7%;
                border: 0px;
                background-color: #9fd3c7;
            }

            .btn2:hover {
                background-color: #ececec;
            }

            .headings{
                margin: 20px;
            }

            input{
                margin: 5px;
            }
        </style>
    </head>
    <body>
    <h1><marquee>COLLEGE CANTEEN WEBSITE</marquee></h1>
    <div class="div1">
        <center>
            <form>
                <button class="btn2" formaction="homepage.php">Home</button>
                <button class="btn2" formaction="rockplaza.php">Rock Plaza</button>
                <button class="btn2" formaction="foodstreet.php">Food Street</button>
                <button class="btn2" formaction="maggiehotspot.php">Maggie Hotspot</button>
                <button class="btn2" formaction="profilepage.php">Profile</button>
            </form>
        </center>
    </div>
    <div class="div2">
    
    <h1 align="center">MAGGIE HOSTSPOT</h1>
    <h2 class="headings">Soupy Maggi</h2>
    <div class="container">
        <div class="container1">
            <div class="image">
                <img src="download (3).jpeg" alt="Soupy Maggi">
            </div>
            <div class="text" align="right">
                <h2>Double Masala Maggi</h2>
                <form name="itemform" action="order.php" method="post">
                <input type="hidden" id="item" name="item" value="Double Masala Maggi">
                    <h4>PRICE : 45</h4>
                    <label>QUANTITY : </label>
                    <input min="1" id="qunatity" name="quantity" type="number" value=1><br>
                    <button name="order" id="order" class="btn" value="45">ORDER</button>
                </form>
            </div>
        </div>
        <div class="container1">
            <div class="image">
                <img src="download (3).jpeg" alt="Soupy Maggi">
            </div>
            <div class="text" align="right">
                <h2>Cheese Oregano Maggi</h2>
                <form name="itemform" action="order.php" method="post">
                <input type="hidden" id="item" name="item" value="Cheese Oregano Maggi">
                    <h4>PRICE : 85</h4>
                    <label>QUANTITY : </label>
                    <input min="1" id="qunatity" name="quantity" type="number" value=1><br>
                    <button name="order" id="order" class="btn" value="85">ORDER</button>
                </form>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="container1">
            <div class="image">
                <img src="download (3).jpeg" alt="Soupy Maggi">
            </div>
            <div class="text" align="right">
                <h2>Shillong Schezwan Maggi</h2>
                <form name="itemform" action="order.php" method="post">
                <input type="hidden" id="item" name="item" value="Shillong Schezwan Maggi">
                    <h4>PRICE : 75</h4>
                    <label>QUANTITY : </label>
                    <input min="1" id="qunatity" name="quantity" type="number" value=1><br>
                    <button name="order" id="order" class="btn" value="75">ORDER</button>
                </form>
            </div>
        </div>
        <div class="container1">
            <div class="image">
                <img src="download (3).jpeg" alt="Soupy Maggi">
            </div>
            <div class="text" align="right">
                <h2>Chilli Garlic Maggi</h2>
                <form name="itemform" action="order.php" method="post">
                <input type="hidden" id="item" name="item" value="Chilli Garlic Maggi">
                    <h4>PRICE : 59</h4>
                    <label>QUANTITY : </label>
                    <input min="1" id="qunatity" name="quantity" type="number" value=1><br>
                    <button name="order" id="order" class="btn" value="59">ORDER</button>
                </form>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="container1">
            <div class="image">
                <img src="download (3).jpeg" alt="Soupy Maggi">
            </div>
            <div class="text" align="right">
                <h2>Sweet Corn Maggi</h2>
                <form name="itemform" action="order.php" method="post">
                <input type="hidden" id="item" name="item" value="Sweet Corn Maggi">
                    <h4>PRICE : 69</h4>
                    <label>QUANTITY : </label>
                    <input min="1" id="qunatity" name="quantity" type="number" value=1><br>
                    <button name="order" id="order" class="btn" value="69">ORDER</button>
                </form>
            </div>
        </div>
        <div class="container1">
            <div class="image">
                <img src="download (3).jpeg" alt="Soupy Maggi">
            </div>
            <div class="text" align="right">
                <h2>Peri Peri Maggi</h2>
                <form name="itemform" action="order.php" method="post">
                <input type="hidden" id="item" name="item" value="Peri Peri Maggi">
                    <h4>PRICE : 65</h4>
                    <label>QUANTITY : </label>
                    <input min="1" id="qunatity" name="quantity" type="number" value=1><br>
                    <button name="order" id="order" class="btn" value="65">ORDER</button>
                </form>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="container1">
            <div class="image">
                <img src="download (3).jpeg" alt="Soupy Maggi">
            </div>
            <div class="text" align="right">
                <h2>Chicken Maggi</h2>
                <form name="itemform" action="order.php" method="post">
                <input type="hidden" id="item" name="item" value="Chicken Maggi">
                    <h4>PRICE : 90</h4>
                    <label>QUANTITY : </label>
                    <input min="1" id="qunatity" name="quantity" type="number" value=1><br>
                    <button name="order" id="order" class="btn" value="90">ORDER</button>
                </form>
            </div>
        </div>
        <div class="container1">
            <div class="image">
                <img src="download (3).jpeg" alt="Soupy Maggi">
            </div>
            <div class="text" align="right">
                <h2>Paneer Maggi</h2>
                <form name="itemform" action="order.php" method="post">
                    <input type="hidden" id="item" name="item" value="Paneer Maggi">
                    <h4>PRICE : 90</h4>
                    <label>QUANTITY : </label>
                    <input min="1" id="qunatity" name="quantity" type="number" value=1><br>
                    <button name="order" id="order" class="btn" value="90">ORDER</button>
                </form>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="container1">
            <div class="image">
                <img src="download (3).jpeg" alt="Soupy Maggi">
            </div>
            <div class="text" align="right">
                <h2>Kaju Maggi</h2>
                <form name="itemform" action="order.php" method="post">
                <input type="hidden" id="item" name="item" value="Kaju Maggi">
                    <h4>PRICE : 80</h4>
                    <label>QUANTITY : </label>
                    <input min="1" id="qunatity" name="quantity" type="number" value=1><br>
                    <button name="order" id="order" class="btn" value="80">ORDER</button>
                </form>
            </div>
        </div>
        <div class="container1">
            <div class="image">
                <img src="download (3).jpeg" alt="Soupy Maggi">
            </div>
            <div class="text" align="right">
                <h2>Mushroom Maggi</h2>
                <form name="itemform" action="order.php" method="post">
                <input type="hidden" id="item" name="item" value="Mushroom Maggi">
                    <h4>PRICE : 80</h4>
                    <label>QUANTITY : </label>
                    <input min="1" id="qunatity" name="quantity" type="number" value=1><br>
                    <button name="order" id="order" class="btn" value="80">ORDER</button>
                </form>
            </div>
        </div>
    </div>
    <h2 class="headings">Pasta</h2>
    <div class="container">
        <div class="container1">
            <div class="image">
                <img src="84784534.webp" alt="Pasta">
            </div>
            <div class="text" align="right">
                <h2>Masala Pasta</h2>
                <form name="itemform" action="order.php" method="post">
                <input type="hidden" id="item" name="item" value="Masala Pasta">
                    <h4>PRICE : 90</h4>
                    <label>QUANTITY : </label>
                    <input min="1" id="qunatity" name="quantity" type="number" value=1><br>
                    <button name="order" id="order" class="btn" value="90">ORDER</button>
                </form>
            </div>
        </div>
        <div class="container1">
            <div class="image">
                <img src="84784534.webp" alt="Pasta">
            </div>
            <div class="text" align="right">
                <h2>Cheese Pasta</h2>
                <form name="itemform" action="order.php" method="post">
                <input type="hidden" id="item" name="item" value="Cheese Pasta">
                    <h4>PRICE : 90</h4>
                    <label>QUANTITY : </label>
                    <input min="1" id="qunatity" name="quantity" type="number" value=1><br>
                    <button name="order" id="order" class="btn" value="90">ORDER</button>
                </form>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="container1">
            <div class="image">
                <img src="84784534.webp" alt="Pasta">
            </div>
            <div class="text" align="right">
                <h2>Chicken Cheese Pasta</h2>
                <form name="itemform" action="order.php" method="post">
                <input type="hidden" id="item" name="item" value="Chicken Cheese Pasta">
                    <h4>PRICE : 130</h4>
                    <label>QUANTITY : </label>
                    <input min="1" id="qunatity" name="quantity" type="number" value=1><br>
                    <button name="order" id="order" class="btn" value="130">ORDER</button>
                </form>
            </div>
        </div>
        <div class="container1">
            <div class="image">
                <img src="84784534.webp" alt="Pasta">
            </div>
            <div class="text" align="right">
                <h2>Paneer Cheese Pasta</h2>
                <form name="itemform" action="order.php" method="post">
                <input type="hidden" id="item" name="item" value="Paneer Cheese Pasta">
                    <h4>PRICE : 120</h4>
                    <label>QUANTITY : </label>
                    <input min="1" id="qunatity" name="quantity" type="number" value=1><br>
                    <button name="order" id="order" class="btn" value="120">ORDER</button>
                </form>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="container1">
            <div class="image">
                <img src="84784534.webp" alt="Pasta">
            </div>
            <div class="text" align="right">
                <h2>Egg Masala Pasta</h2>
                <form name="itemform" action="order.php" method="post">
                <input type="hidden" id="item" name="item" value="Egg Masala Pasta">
                    <h4>PRICE : 120</h4>
                    <label>QUANTITY : </label>
                    <input min="1" id="qunatity" name="quantity" type="number" value=1><br>
                    <button name="order" id="order" class="btn" value="120">ORDER</button>
                </form>
            </div>
        </div>
        <div class="container1">
            <div class="image">
                <img src="84784534.webp" alt="Pasta">
            </div>
            <div class="text" align="right">
                <h2>Veg Butter Masala Pasta</h2>
                <form name="itemform" action="order.php" method="post">
                <input type="hidden" id="item" name="item" value="Veg Butter Masala Pasta">
                    <h4>PRICE : 119</h4>
                    <label>QUANTITY : </label>
                    <input min="1" id="qunatity" name="quantity" type="number" value=1><br>
                    <button name="order" id="order" class="btn" value="119">ORDER</button>
                </form>
            </div>
        </div>
    </div>
    <h2 class="headings">Soups</h2>
    <div class="container">
        <div class="container1">
            <div class="image">
                <img src="minestrone-soup-recipe-22.jpg" alt="Soups">
            </div>
            <div class="text" align="right">
                <h2>Veg Corn Soup</h2
                <form name="itemform" action="order.php" method="post">
                <input type="hidden" id="item" name="item" value=Veg Corn Soup">
                    <h4>PRICE : 85</h4>
                    <label>QUANTITY : </label>
                    <input min="1" id="qunatity" name="quantity" type="number" value=1><br>
                    <button name="order" id="order" class="btn" value=85">ORDER</button>
                </form>
            </div>
        </div>
        <div class="container1">
            <div class="image">
                <img src="minestrone-soup-recipe-22.jpg" alt="Soups">
            </div>
            <div class="text" align="right">
                <h2>Veg Manchow Soup</h2>
                <form name="itemform" action="order.php" method="post">
                <input type="hidden" id="item" name="item" value="Veg Manchow Soup">
                    <h4>PRICE : 85</h4>
                    <label>QUANTITY : </label>
                    <input min="1" id="qunatity" name="quantity" type="number" value=1><br>
                    <button name="order" id="order" class="btn" value="85">ORDER</button>
                </form>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="container1">
            <div class="image">
                <img src="minestrone-soup-recipe-22.jpg" alt="Soups">
            </div>
            <div class="text" align="right">
                <h2>Chicken Corn Soup</h2>
                <form name="itemform" action="order.php" method="post">
                <input type="hidden" id="item" name="item" value="Chicken Corn Soup">
                    <h4>PRICE : 99</h4>
                    <label>QUANTITY : </label>
                    <input min="1" id="qunatity" name="quantity" type="number" value=1><br>
                    <button name="order" id="order" class="btn" value="99">ORDER</button>
                </form>
            </div>
        </div>
        <div class="container1">
            <div class="image">
                <img src="minestrone-soup-recipe-22.jpg" alt="Soups">
            </div>
            <div class="text" align="right">
                <h2>Chicken Manchow Soup</h2>
                <form name="itemform" action="order.php" method="post">
                <input type="hidden" id="item" name="item" value="Chicken Manchow Soup">
                    <h4>PRICE : 99</h4>
                    <label>QUANTITY : </label>
                    <input min="1" id="qunatity" name="quantity" type="number" value=1><br>
                    <button name="order" id="order" class="btn" value="99">ORDER</button>
                </form>
            </div>
        </div>
    </div>
    <h2 class="headings">Fried Maggies</h2>
    <div class="container">
        <div class="container1">
            <div class="image">
                <img src="e2005a3eeb7e67b56f42f2f9659581ea.jpg" alt="Fried Maggies">
            </div>
            <div class="text" align="right">
                <h2>Fried Plain Maggi</h2>
                <form name="itemform" action="order.php" method="post">
                <input type="hidden" id="item" name="item" value="Fried Plain Maggi">
                    <h4>PRICE : 50</h4>
                    <label>QUANTITY : </label>
                    <input min="1" id="qunatity" name="quantity" type="number" value=1><br>
                    <button name="order" id="order" class="btn" value="50">ORDER</button>
                </form>
            </div>
        </div>
        <div class="container1">
            <div class="image">
                <img src="e2005a3eeb7e67b56f42f2f9659581ea.jpg" alt="Fried Maggies">
            </div>
            <div class="text" align="right">
                <h2>Fried Veg Maggi</h2>
                <form name="itemform" action="order.php" method="post">
                <input type="hidden" id="item" name="item" value="Fried Veg Maggi">
                    <h4>PRICE : 65</h4>
                    <label>QUANTITY : </label>
                    <input min="1" id="qunatity" name="quantity" type="number" value=1><br>
                    <button name="order" id="order" class="btn" value="65">ORDER</button>
                </form>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="container1">
            <div class="image">
                <img src="e2005a3eeb7e67b56f42f2f9659581ea.jpg" alt="Fried Maggies">
            </div>
            <div class="text" align="right">
                <h2>Fried Egg Maggi</h2>
                <form name="itemform" action="order.php" method="post">
                <input type="hidden" id="item" name="item" value="Fried Egg Maggi">
                    <h4>PRICE : 75</h4>
                    <label>QUANTITY : </label>
                    <input min="1" id="qunatity" name="quantity" type="number" value=1><br>
                    <button name="order" id="order" class="btn" value="75">ORDER</button>
                </form>
            </div>
        </div>
        <div class="container1">
            <div class="image">
                <img src="e2005a3eeb7e67b56f42f2f9659581ea.jpg" alt="Fried Maggies">
            </div>
            <div class="text" align="right">
                <h2>Fried Chicken Maggi</h2>
                <form name="itemform" action="order.php" method="post">
                <input type="hidden" id="item" name="item" value="Fried Chicken Maggi">
                    <h4>PRICE : 95</h4>
                    <label>QUANTITY : </label>
                    <input min="1" id="qunatity" name="quantity" type="number" value=1><br>
                    <button name="order" id="order" class="btn" value="95">ORDER</button>
                </form>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="container1">
            <div class="image">
                <img src="e2005a3eeb7e67b56f42f2f9659581ea.jpg" alt="Fried Maggies">
            </div>
            <div class="text" align="right">
                <h2>Fried Schezwan Maggi</h2>
                <form name="itemform" action="order.php" method="post">
                <input type="hidden" id="item" name="item" value="Fried Schezwan Maggi">
                    <h4>PRICE : 75</h4>
                    <label>QUANTITY : </label>
                    <input min="1" id="qunatity" name="quantity" type="number" value=1><br>
                    <button name="order" id="order" class="btn" value="75">ORDER</button>
                </form>
            </div>
        </div>
        <div class="container1">
            <div class="image">
                <img src="e2005a3eeb7e67b56f42f2f9659581ea.jpg" alt="Fried Maggies">
            </div>
            <div class="text" align="right">
                <h2>Fried Peri Peri Maggi</h2>
                <form name="itemform" action="order.php" method="post">
                <input type="hidden" id="item" name="item" value="Fried Peri Peri Maggi">
                    <h4>PRICE : 75</h4>
                    <label>QUANTITY : </label>
                    <input min="1" id="qunatity" name="quantity" type="number" value=1><br>
                    <button name="order" id="order" class="btn" value="75">ORDER</button>
                </form>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="container1">
            <div class="image">
                <img src="e2005a3eeb7e67b56f42f2f9659581ea.jpg" alt="Fried Maggies">
            </div>
            <div class="text" align="right">
                <h2>Fried Cheese Maggi</h2>
                <form name="itemform" action="order.php" method="post">
                <input type="hidden" id="item" name="item" value="Fried Cheese Maggi">
                    <h4>PRICE : 95</h4>
                    <label>QUANTITY : </label>
                    <input min="1" id="qunatity" name="quantity" type="number" value=1><br>
                    <button name="order" id="order" class="btn" value="95">ORDER</button>
                </form>
            </div>
        </div>
        <div class="container1">
            <div class="image">
                <img src="e2005a3eeb7e67b56f42f2f9659581ea.jpg" alt="Fried Maggies">
            </div>
            <div class="text" align="right">
                <h2>Fried Kaju Maggi</h2>
                <form name="itemform" action="order.php" method="post">
                <input type="hidden" id="item" name="item" value="Fried Kaju Maggi">
                    <h4>PRICE : 90</h4>
                    <label>QUANTITY : </label>
                    <input min="1" id="qunatity" name="quantity" type="number" value=1><br>
                    <button name="order" id="order" class="btn" value="90">ORDER</button>
                </form>
            </div>
        </div>
    </div>
    <h2 class="headings">Momos</h2>
    <div class="container">
        <div class="container1">
            <div class="image">
                <img src="steamed-momos-wontons-1957616-hero-01-1c59e22bad0347daa8f0dfe12894bc3c.jpg" alt="Momos">
            </div>
            <div class="text" align="right">
                <h2>Veg Momos Steamed</h2>
                <form name="itemform" action="order.php" method="post">
                <input type="hidden" id="item" name="item" value="Veg Momos Steamed">
                    <h4>PRICE : 80</h4>
                    <label>QUANTITY : </label>
                    <input min="1" id="qunatity" name="quantity" type="number" value=1><br>
                    <button name="order" id="order" class="btn" value="80">ORDER</button>
                </form>
            </div>
        </div>
        <div class="container1">
            <div class="image">
                <img src="steamed-momos-wontons-1957616-hero-01-1c59e22bad0347daa8f0dfe12894bc3c.jpg" alt="Momos">
            </div>
            <div class="text" align="right">
                <h2>Veg Momos Fried</h2>
                <form name="itemform" action="order.php" method="post">
                <input type="hidden" id="item" name="item" value="Veg Momos Fried">
                    <h4>PRICE : 90</h4>
                    <label>QUANTITY : </label>
                    <input min="1" id="qunatity" name="quantity" type="number" value=1><br>
                    <button name="order" id="order" class="btn" value="90">ORDER</button>
                </form>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="container1">
            <div class="image">
                <img src="steamed-momos-wontons-1957616-hero-01-1c59e22bad0347daa8f0dfe12894bc3c.jpg" alt="Momos">
            </div>
            <div class="text" align="right">
                <h2>Paneer Momos Fried</h2>
                <form name="itemform" action="order.php" method="post">
                <input type="hidden" id="item" name="item" value="Paneer Momos Fried">
                    <h4>PRICE : 99</h4>
                    <label>QUANTITY : </label>
                    <input min="1" id="qunatity" name="quantity" type="number" value=1><br>
                    <button name="order" id="order" class="btn" value="99">ORDER</button>
                </form>
            </div>
        </div>
        <div class="container1">
            <div class="image">
                <img src="steamed-momos-wontons-1957616-hero-01-1c59e22bad0347daa8f0dfe12894bc3c.jpg" alt="Momos">
            </div>
            <div class="text" align="right">
                <h2>Chilli Chicken Momos Fried</h2>
                <form name="itemform" action="order.php" method="post">
                <input type="hidden" id="item" name="item" value="Chilli Chicken Momos Fried">
                    <h4>PRICE : 99</h4>
                    <label>QUANTITY : </label>
                    <input min="1" id="qunatity" name="quantity" type="number" value=1><br>
                    <button name="order" id="order" class="btn" value="99">ORDER</button>
                </form>
            </div>
        </div>
    </div>
    <h2 class="headings">Beverages</h2>
    <div class="container">
        <div class="container1">
            <div class="image">
                <img src="mocha-cappuccino-recipe-scaled-720x720.jpeg" alt="Beverages">
            </div>
            <div class="text" align="right">
                <h2>Cappuccino</h2>
                <form name="itemform" action="order.php" method="post">
                <input type="hidden" id="item" name="item" value="Cappuccino">
                    <h4>PRICE : 30</h4>
                    <label>QUANTITY : </label>
                    <input min="1" id="qunatity" name="quantity" type="number" value=1><br>
                    <button name="order" id="order" class="btn" value="30">ORDER</button>
                </form>
            </div>
        </div>
        <div class="container1">
            <div class="image">
                <img src="HotCocoaForOne_RECIPE_012022_086_VOG_final.webp" alt="Beverages">
            </div>
            <div class="text" align="right">
                <h2>Hot Chocolate</h2>
                <form name="itemform" action="order.php" method="post">
                <input type="hidden" id="item" name="item" value="Hot Chocolate">
                    <h4>PRICE : 35</h4>
                    <label>QUANTITY : </label>
                    <input min="1" id="qunatity" name="quantity" type="number" value=1><br>
                    <button name="order" id="order" class="btn" value="35">ORDER</button>
                </form>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="container1">
            <div class="image">
                <img src="exps22961_RDSM1338224D75_RMS2.jpg" alt="Beverages">
            </div>
            <div class="text" align="right">
                <h2>Frappe Mocha</h2>
                <form name="itemform" action="order.php" method="post">
                <input type="hidden" id="item" name="item" value="Frappe Mocha">
                    <h4>PRICE : 60</h4>
                    <label>QUANTITY : </label>
                    <input min="1" id="qunatity" name="quantity" type="number" value=1><br>
                    <button name="order" id="order" class="btn" value="60">ORDER</button>
                </form>
            </div>
        </div>
        <div class="container1">
            <div class="image">
                <img src="download (4).jpeg" alt="Beverages">
            </div>
            <div class="text" align="right">
                <h2>Cold Chocolate</h2>
                <form name="itemform" action="order.php" method="post">
                <input type="hidden" id="item" name="item" value="Cold Chocolate">
                    <h4>PRICE : 70</h4>
                    <label>QUANTITY : </label>
                    <input min="1" id="qunatity" name="quantity" type="number" value=1><br>
                    <button name="order" id="order" class="btn" value="70">ORDER</button>
                </form>
            </div>
        </div>
    </div>
    </div>
    </body>
</html>
';
}
else{
    echo "<script> location.href='loginpage.php'</script>";
}
?>