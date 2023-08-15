<?php

session_start();

$item = $_POST['item'];
$price = $_POST['order'];
$quantity = $_POST['quantity'];

if(isset($_SESSION['regno'])){
    $conn = new mysqli('localhost', 'root', '', 'details');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }
    $regno = $_SESSION['regno'];

    $q1 = "SELECT Name FROM reg_info WHERE regno='$regno'";
    $result = $conn->query($q1);
    
    if($result->num_rows > 0){
        $row = $result->fetch_assoc();
        $name = $row['Name'];
    }
    else{
        echo 'Error occured : '.', '.$conn->error;
    }
    $conn->close();
    echo '
    <html>
        <head>
            <title>PROFILE</title>
            <style>
                body{
                    color:#142d4c;
                    background-color:#ececec;
                }
                .div3{
                    height: 500px;
                    color:#142d4c;
                    display:grid;
                    justify-content: center;
                    align-items: center;
                    background-color:#ececec;
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

                .div4{
                    height: 350px;
                    width: 400px;
                    border: 1px solid #142d4c;
                    border-bottom-left-radius: 50px;
                    border-top-right-radius: 50px;
                    background-color: #9fd3c7;
                }

                 h1{
                    color: #142d4c;
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
        <div class="div3">
        <div class="div4">
            <h1 align="center"><u>BILL</u></h1>
            <table align="center" cellpadding="10">
            <form name="Myform" action="" method="post">
                <input type="hidden" id="item" name="item" value="'.$item.'">
                <input type="hidden" id="order" name="order" value='.$price.'>
                <input type="hidden" id="quantity" name="quantity" value='.$quantity.'>
                <tr>
                    <th align="left">ORDER BY : </th>
                    <td>'.$name.'('.$regno.')'.'</td>
                </tr>
                <tr>
                    <th align="left">ITEM : </th>
                    <td>'.$item.'</td>
                </tr>
                <tr>
                    <th align="left">PRICE : </th>
                    <td>'.$price.'</td>
                </tr>
                <tr>
                    <th align="left">QUANTITY : </th>
                    <td>'.$quantity.'</td>
                </tr>
                <tr>
                    <th align="left">TOTAL BILL : </th>
                    <td>'.$price*$quantity.'</td>
                </tr>
                <tr>
                    <td><button class="btn" id="ordernow" name="ordernow">ORDER NOW</button></td>
                </tr>
            </form>
            </table>
        </div>
        </div>
        </div>
        </body>
    </html>
    ';
    if(isset($_POST['ordernow'])){
        echo "<script>alert('ORDER OF Rs.".$price*$quantity." IS PLACED');</script>";
        echo "<script> location.href='homepage.php'</script>";
    }
}
else{
    echo "<script> location.href='loginpage.php'</script>";
}
?>