<html>
    <head>
        <title>connect</title>
    </head>
    <body>
        <?php

        $name = $_POST['name'];
        $regno = $_POST['regno'];
        $password = $_POST['password'];
        $sqn = $_POST['sqn'];

        $conn = new mysqli('localhost', 'root', '', 'details');
        if($conn->connect_error){
            die('Connection Failed : '.$conn->connect_error);
        }

        $q1 = "INSERT INTO reg_info VALUES ('$name', '$regno', '$password', '$sqn')";

        if($conn->query($q1)===TRUE){
            echo "<script>alert('REGITERED SUCCESSFULLY');</script>";
            echo "<script> location.href='loginpage.php'</script>";
        }
        else{
            echo 'Error occured : '.$q1.', '.$conn->error;
        }

        $conn->close();

        ?>
    </body>
</html>
