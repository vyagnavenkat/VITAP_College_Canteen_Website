<?php

session_start();

if(isset($_SESSION['regno'])){
    session_destroy();
}
echo'
<html>
    <head>
        <title>Login Page</title>
        <style>
            body{
                color:#142d4c;
                display:grid;
                justify-content: center;
                align-items: center;
                background-color:#ececec;
                background-image: url("download.png");
                background-repeat: no-repeat;
                background-size: 10%;
                background-position-x: 10px;
                background-position-y: 10px;
            }

            div{
                height: 270px;
                width: 380px;
                border: 1px solid #142d4c;
                border-bottom-left-radius: 50px;
                border-top-right-radius: 50px;
                background-color: #9fd3c7;
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

        </style>

        <script Language="Javascript">
            function validate(){
                var regno = document.Myform.regno.value;
                var password = document.Myform.password.value;
                var re = /^(19|20|21|22)[A-Z]{3}\d{4}$/;

                if(name=""){
                    alert("Name cannot be empty");
                    return false;
                }
                if(!re.test(regno)){
                    alert("Invalid reg.no");
                    return false;
                }

                else if(password.length < 6){
                    alert("Invalid Password");
                    return false;
                }
                else{return true;}
            }
        </script>
    </head>
    <body>
        <div>
            <h1 align="center">Login Page</h1>
            <form name="Myform" action="login.php" method="post">
                <table align="center" cellpadding="10">
                    <tr>
                        <td>
                            <label for="regno">Registration Number : </label>
                        </td>
                        <td>
                            <input type="text" id="regno" name="regno">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="password">Password : </label>
                        </td>
                        <td>
                            <input type="password" id="password" name="password">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input class="btn" type="submit" id="submit" name="submit" value="Login" onclick="return validate()">
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                            <button class="btn" formaction="changepwdpage.php">Forgot Password?</button>
                        </td>
                        <td align="right">
                            <button class="btn" formaction="registerpage.php">Not register yet?</button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>
';
?>