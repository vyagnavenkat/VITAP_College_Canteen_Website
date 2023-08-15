<?php

session_start();

if(isset($_SESSION['regno'])){
    echo '
<html>
    <head>
        <title>FOOD STREET</title>
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
    
    <h1 align="center">FOOD STREET</h1>
    <h1 class="headings">DOSA</h1>
    <div class="container">
        <div class="container1">
            <div class="image">
                <img src="dosa-recipe.jpg" alt="biryani">
            </div>
            <div class="text" align="right">
            <h2>PLAIN DOSA</h2>
                <form name="itemform" action="order.php" method="post">
                    <input type="hidden" id="item" name="item" value="PLAIN DOSA">
                    <h4>PRICE : 50</h4>
                    <label>QUANTITY : </label>
                    <input min="1" id="qunatity" name="quantity" type="number" value=1><br>
                    <button name="order" id="order" class="btn" value="50">ORDER</button>
                </form>
            </div>
        </div>
        <div class="container1">
            <div class="image">
                <img src="dosa-recipe.jpg" alt="biryani">
            </div>
            <div class="text" align="right">
                <h2>ONION DOSA</h2>
                <form name="itemform" action="order.php" method="post">
                <input type="hidden" id="item" name="item" value="ONION DOSA">
                    <h4>PRICE : 70</h4>
                    <label>QUANTITY : </label>
                    <input min="1" id="qunatity" name="quantity" type="number" value=1><br>
                    <button name="order" id="order" class="btn" value="70">ORDER</button>
                </form>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="container1">
            <div class="image">
                <img src="dosa-recipe.jpg" alt="biryani">
            </div>
            <div class="text" align="right">
                <h2>MASALA DOSA</h2>
                <form name="itemform" action="order.php" method="post">
                <input type="hidden" id="item" name="item" value="MASALA DOSA">
                    <h4>PRICE : 90</h4>
                    <label>QUANTITY : </label>
                    <input min="1" id="qunatity" name="quantity" type="number" value=1><br>
                    <button name="order" id="order" class="btn" value="90">ORDER</button>
                </form>
            </div>
        </div>
        <div class="container1">
            <div class="image">
                <img src="dosa-recipe.jpg" alt="biryani">
            </div>
            <div class="text" align="right">
                <h2>GHEE DOSA</h2>
                <form name="itemform" action="order.php" method="post">
                <input type="hidden" id="item" name="item" value="GHEE DOSA">
                    <h4>PRICE : 70</h4>
                    <label>QUANTITY : </label>
                    <input min="1" id="qunatity" name="quantity" type="number" value=1><br>
                    <button name="order" id="order" class="btn" value="70">ORDER</button>
                </form>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="container1">
            <div class="image">
                <img src="dosa-recipe.jpg" alt="biryani">
            </div>
            <div class="text" align="right">
                <h2>UTHAPPAM</h2>
                <form name="itemform" action="order.php" method="post">
                <input type="hidden" id="item" name="item" value="UTHAPPAM">
                    <h4>PRICE : 110</h4>
                    <label>QUANTITY : </label>
                    <input min="1" id="qunatity" name="quantity" type="number" value=1><br>
                    <button name="order" id="order" class="btn" value="110">ORDER</button>
                </form>
            </div>
        </div>
        <div class="container1">
            <div class="image">
                <img src="dosa-recipe.jpg" alt="meals">
            </div>
            <div class="text" align="right">
                <h2>EGG DOSA</h2>
                <form name="itemform" action="order.php" method="post">
                <input type="hidden" id="item" name="item" value="EGG DOSA">
                    <h4>PRICE : 60</h4>
                    <label>QUANTITY : </label>
                    <input min="1" id="qunatity" name="quantity" type="number" value=1><br>
                    <button name="order" id="order" class="btn" value="60">ORDER</button>
                </form>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="container1">
            <div class="image">
                <img src="dosa-recipe.jpg" alt="fried rice">
            </div>
            <div class="text" align="right">
                <h2>CHICKEN DOSA</h2>
                <form name="itemform" action="order.php" method="post">
                <input type="hidden" id="item" name="item" value="CHICKEN DOSA">
                    <h4>PRICE : 150</h4>
                    <label>QUANTITY : </label>
                    <input min="1" id="qunatity" name="quantity" type="number" value=1><br>
                    <button name="order" id="order" class="btn" value="150">ORDER</button>
                </form>
            </div>
        </div>
        <div class="container1">
            <div class="image">
                <img src="dosa-recipe.jpg" alt="fried rice">
            </div>
            <div class="text" align="right">
            <h2>CHEESE DOSA</h2>
                <form name="itemform" action="order.php" method="post">
                <input type="hidden" id="item" name="item" value="CHEESE DOSA">
                    <h4>PRICE : 80</h4>
                    <label>QUANTITY : </label>
                    <input min="1" id="qunatity" name="quantity" type="number" value=1><br>
                    <button name="order" id="order" class="btn" value="80">ORDER</button>
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