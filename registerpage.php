<html>
    <head>
        <title>Register Page</title>
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
                height: 400px;
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
                var name = document.Myform.name.value;
                var regno = document.Myform.regno.value;
                var password = document.Myform.password.value;
                var password2 = document.Myform.password2.value;
                var sqn = document.Myform.sqn.value;
                var re = /^(19|20|21|22)[A-Z]{3}\d{4}$/;

                if(name==""){
                    alert("Name cannot be empty");
                    return false;
                }

                else if(!re.test(regno)){
                   alert("Invalid reg.no");
                   return false;
                }

                else if(password.length < 6){
                    alert("Invalid Password");
                    return false;
                }

                else if(password2.length < 6){
                    alert("Invalid Password");
                    return false;
                }

                else if(password != password2){
                    alert("Both the password must be the same");
                    return false;
                }
                else if(sqn==""){
                    alert("Sequrity Question is Compulsory");
                    return false;
                }
                return true;
            }
        </script>
    </head>
    <body>
        <div>
            <h1 align="center">Register Page</h1>
            <form name="Myform" action="register.php" method="post">
                <table align="center" cellpadding="10">
                    <tr>
                        <td>
                            <label for="name">Name : </label>
                        </td>
                        <td>
                            <input type="text" id="name" name="name">
                        </td>
                    </tr>
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
                            <label for="password2">Confirm Password : </label>
                        </td>
                        <td>
                            <input type="password" id="password2" name="password2">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="sqn">Security Question:<br>What is your favourite color?</label>
                        </td>
                        <td>
                            <input type="text" id="sqn" name="sqn">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input class="btn" type="submit" id="submit" name="submit" value="Register" onclick="return validate()">
                        </td>
                        <td>
                            <button class="btn" formaction="loginpage.php">Already have an account?</button>
                        </td>
                    </tr>
                    
                </table>
            </form>
        </div>
        <h1 id="invalid" name="invalid"></h1>
    </body>
</html>