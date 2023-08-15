<html>
    <head>
        <title>login</title>
    </head>
    <body>
        <?php

        $regno = $_POST['regno'];
        $password = $_POST['password'];

        session_start();

        if(isset($_SESSION['regno'])){
            echo "<script> location.href='homepage.php'</script>";
        }

        else{
            $conn = new mysqli('localhost', 'root', '', 'details');
            if($conn->connect_error){
                die('Connection Failed : '.$conn->connect_error);
            }

            $q1 = "SELECT password FROM reg_info WHERE regno='$regno'";
            $result = $conn->query($q1);
            
            if($result->num_rows > 0){
                $row = $result->fetch_assoc();
                if($row['password'] === $password){
                    $_SESSION['regno']=$regno;
                    echo "<script> location.href='login.php'</script>";
                }
                else{
                    echo "<script> location.href='loginpage.php'</script>";
                }
            }
            else{
                echo 'Error occured : '.', '.$conn->error;
            }
            $conn->close();
        }
        ?>
    </body>
</html>
