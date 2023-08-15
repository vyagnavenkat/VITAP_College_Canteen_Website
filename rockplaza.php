<?php

session_start();

if(isset($_SESSION['regno'])){
    echo '
<html>
    <head>
        <title>ROCK-PLAZA</title>
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
    
    <h1 align="center">ROCK-PLAZA</h1>
    <div class="container">
        <div class="container1">
            <div class="image">
                <img src="download1.jpeg" alt="biryani">
            </div>
            <div class="text" align="right">
            <h2>SP CHICKEN BIRYANI</h2>
                <form name="itemform" action="order.php" method="post">
                    <input type="hidden" id="item" name="item" value="SP CHICKEN BIRYANI">
                    <h4>PRICE : 200</h4>
                    <label>QUANTITY : </label>
                    <input min="1" id="qunatity" name="quantity" type="number" value=1><br>
                    <button name="order" id="order" class="btn" value="200">ORDER</button>
                </form>
            </div>
        </div>
        <div class="container1">
            <div class="image">
                <img src="vegetable-biryani.jpg" alt="biryani">
            </div>
            <div class="text" align="right">
                <h2>VEG BIRYANI</h2>
                <form name="itemform" action="order.php" method="post">
                <input type="hidden" id="item" name="item" value="VEG BIRYANI">
                    <h4>PRICE : 150</h4>
                    <label>QUANTITY : </label>
                    <input min="1" id="qunatity" name="quantity" type="number" value=1><br>
                    <button name="order" id="order" class="btn" value="150">ORDER</button>
                </form>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="container1">
            <div class="image">
                <img src="hyderabadi-biryani-recipe-chicken.jpg" alt="biryani">
            </div>
            <div class="text" align="right">
                <h2>DUM BIRYANI</h2>
                <form name="itemform" action="order.php" method="post">
                <input type="hidden" id="item" name="item" value="DUM BIRYANI">
                    <h4>PRICE : 180</h4>
                    <label>QUANTITY : </label>
                    <input min="1" id="qunatity" name="quantity" type="number" value=1><br>
                    <button name="order" id="order" class="btn" value="180">ORDER</button>
                </form>
            </div>
        </div>
        <div class="container1">
            <div class="image">
                <img src="images.jpeg" alt="biryani">
            </div>
            <div class="text" align="right">
                <h2>FRY BIRYANI</h2>
                <form name="itemform" action="order.php" method="post">
                <input type="hidden" id="item" name="item" value="FRY BIRYANI">
                    <h4>PRICE : 180</h4>
                    <label>QUANTITY : </label>
                    <input min="1" id="qunatity" name="quantity" type="number" value=1><br>
                    <button name="order" id="order" class="btn" value="180">ORDER</button>
                </form>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="container1">
            <div class="image">
                <img src="Achari-Paneer-Biryani-Featured.jpg" alt="biryani">
            </div>
            <div class="text" align="right">
                <h2>PANEER BIRYANI</h2>
                <form name="itemform" action="order.php" method="post">
                <input type="hidden" id="item" name="item" value="PANEER BIRYANI">
                    <h4>PRICE : 180</h4>
                    <label>QUANTITY : </label>
                    <input min="1" id="qunatity" name="quantity" type="number" value=1><br>
                    <button name="order" id="order" class="btn" value="180">ORDER</button>
                </form>
            </div>
        </div>
        <div class="container1">
            <div class="image">
                <img src="images" alt="meals">
            </div>
            <div class="text" align="right">
                <h2>MEALS</h2>
                <form name="itemform" action="order.php" method="post">
                <input type="hidden" id="item" name="item" value="MEALS">
                    <h4>PRICE : 100</h4>
                    <label>QUANTITY : </label>
                    <input min="1" id="qunatity" name="quantity" type="number" value=1><br>
                    <button name="order" id="order" class="btn" value="100">ORDER</button>
                </form>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="container1">
            <div class="image">
                <img src="egg-fried-rice-recipe.jpg" alt="fried rice">
            </div>
            <div class="text" align="right">
                <h2>EGG FRIED RICE</h2>
                <form name="itemform" action="order.php" method="post">
                <input type="hidden" id="item" name="item" value="EGG FRIED RICE">
                    <h4>PRICE : 180</h4>
                    <label>QUANTITY : </label>
                    <input min="1" id="qunatity" name="quantity" type="number" value=1><br>
                    <button name="order" id="order" class="btn" value="180">ORDER</button>
                </form>
            </div>
        </div>
        <div class="container1">
            <div class="image">
                <img src="grill-ground-chicken-fried-rice-2.jpg" alt="fried rice">
            </div>
            <div class="text" align="right">
            <h2>CHICKEN FRIED RICE</h2>
                <form name="itemform" action="order.php" method="post">
                <input type="hidden" id="item" name="item" value="CHICKEN FRIED RICE">
                    <h4>PRICE : 100</h4>
                    <label>QUANTITY : </label>
                    <input min="1" id="qunatity" name="quantity" type="number" value=1><br>
                    <button name="order" id="order" class="btn" value="100">ORDER</button>
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