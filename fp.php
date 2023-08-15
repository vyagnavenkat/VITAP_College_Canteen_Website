<html>
    <head>
        <title>connect</title>
    </head>
    <body>
        <?php
        session_start();

        $regno = $_POST['regno'];
        $password = $_POST['password'];
        $sqn = $_POST['sqn'];

        $conn = new mysqli('localhost', 'root', '', 'details');
        if($conn->connect_error){
            die('Connection Failed : '.$conn->connect_error);
        }

        $q1 = "UPDATE reg_info SET password = '$password' WHERE regno = '$regno'";
        $q2 = "SELECT sqn FROM reg_info WHERE regno='$regno'";
        $result = $conn->query($q2);

        if($result->num_rows > 0){
            $row = $result->fetch_assoc();
            if($row['sqn'] === $sqn){
                if($conn->query($q1) === TRUE){
                    echo "<script>alert('PASSWORD CHANGED SUCCESSFULLY');</script>";
                    if(isset($_SESSION['regno'])){
                        echo "<script> location.href='profilepage.php'</script>";
                    }
                    else{
                        echo "<script> location.href='loginpage.php'</script>";
                    }
                }
                else{
                    echo "<script>alert('USER DATA NOT FOUND');</script>";
                    echo "<script> location.href='changepwdpage.php'</script>";
                }
            }
            else{
                echo "<script>alert('You have answered the sequrity question wrong');</script>";
                echo "<script> location.href='changepwdpage.php'</script>";
            }
        }
        else{
            echo 'Error occured : '.', '.$conn->error;
        }
        

        $conn->close();

        ?>
    </body>
</html>
