<?php
session_start();
if(isset($_SESSION['regno'])){
    session_destroy();
}
echo "<script>alert('LOGGED OUT SUCCESSFULLY');</script>";
echo "<script> location.href='loginpage.php'</script>";
?>