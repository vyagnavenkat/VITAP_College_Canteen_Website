<?php

session_start();

if(isset($_SESSION['regno'])){
    echo '
<html>
    <head>
        <title>HOME</title>
        <style>
            body{
                color: #142d4c;
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
                align-items: center;
                height: 770px;
                width: 100%;
                border: 2px solid #142d4c;
                background-color: #ececec;
            }

            .div3 {
                align-items: center;
                height: 300px;
                width: 99.82%;
                border: 2px solid #142d4c;
                background-color: #ececec;
            }

            .img2{
                height: 200px;
                width: 99.82%;
                border: 2px solid #142d4c;
            }

            .img3{
                height: 100%;
                position: relative;
                left: 0px;
            }

            .img4{
                height: 100%;
                position: relative;
                left: 25px;
            }

            .img5{
                height: 100%;
                position: relative;
                left: 57.5px;
            }
            
            .btn {
                color:#142d4c;
                font-size:x-large;
                height: 100%;
                width: 19.7%;
                border: 0px;
                background-color: #9fd3c7;
            }

            .btn:hover {
                background-color: #ececec;
            }
        </style>
    </head>
    <body>
    <h1><marquee>COLLEGE CANTEEN WEBSITE</marquee></h1>
        <div class="div1">
            <center>
            
                <form>
                    <button class="btn" formaction="homepage.php">Home</button>
                    <button class="btn" formaction="rockplaza.php">Rock Plaza</button>
                    <button class="btn" formaction="foodstreet.php">Food Street</button>
                    <button class="btn" formaction="maggiehotspot.php">Maggie Hotspot</button>
                    <button class="btn" formaction="profilepage.php">Profile</button>
                </form>
            </center>
        </div>
        
        <div class="div2">
            <h1>ABOUT VIT-AP</h1>
            
            <p>VIT-AP University (VIT-AP), also known as Vellore Institute of Technology, Andhra Pradesh or VIT University, Andhra Pradesh, is a private research university located in Inavolu, Amaravati, the capital of Andhra Pradesh, India. The university was established in 2017 by the Vellore Institute of Technology through the Andhra Pradesh Private Universities (Establishment and Regulation) Act, 2016.

The institution offers 19 Undergraduate, 4 Postgraduate, 4 Integrated, 4 dual and 16 Research programs.</p>
            <img class="img2" src="admissions.jpg" alt="VIT-AP">
            <h1>ABOUT US</h1>
            <p>This website allows students from VIT-AP students to preorder food from various college canteens like ROCK-PLAZA, FOOD STREET, and MAGGIE HOTSPOT.</p>
            <div class="div3">
                <img class="img3" src="download.jpeg" alt="ROCK-PLAZA">
                <img class="img4" src="download (1).jpeg" alt="ROCK-PLAZA">
                <img class="img5" src="download (2).jpeg" alt="ROCK-PLAZA">
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