<html>
    <head>
        <!-- <title>Log In - Raben Delivery Service</title> -->
        <link rel="stylesheet" href="View/css/styleSignUp.css">
    </head> 
    <body>
        <div id="square">
            <h1>Sign Up</h1>
            <form action="action.php" method="post">
                <table>
                    <tbody><tr>
                        <td>Username:</td>
                        <td><input type="text" id="username" name="iUsername" size="25" maxlength="25"></td>
                    </tr>
                    <tr>
                        <td>Password:</td>
<<<<<<< Updated upstream
                        <td> <input type="password" name="password" size="15" maxlength="15"></td>
=======
                        <td>
                            <input type="text" name="iPass" id="pass" size="25" maxlength="25">
                            <img class="icon" id="check1" src="View/img/check.png" alt="OK">
                        </td>
                    </tr>
                    <tr>
                        <td>Confirm Password:</td>
                        <td> 
                            <input type="password" name="iConPass" id="conPass" size="15" maxlength="15">
                            <img class="icon" id="check2" src="View/img/check.png" alt="OK">
                        </td>
>>>>>>> Stashed changes
                    </tr>
                </tbody></table>
            </form>
            <input id="daftar" type="submit" value="Daftar" name='addNewUser'>
        </div>
        <div id="pad">
            
        </div>
    </body>
<<<<<<< Updated upstream
</html>
=======
    <script>
        let pw = document.getElementById('pass');
        let cPw = document.getElementById('conPass');
        let pass = false;
        let cpass = false;

        pw.addEventListener("keyup", checkPassword);
        cPw.addEventListener("keyup", confirmPassword);

        function checkPassword() {
            if (pw.value.length >= 8 && pw.value.length <= 12) {
                document.getElementById('check1').style.visibility = 'visible';
                pass = true;
            } else {
                document.getElementById('check1').style.visibility = 'hidden';
                pass = false;
            }

            if (pass && cpass) {
                document.getElementById("daftar").disabled = false;
            } else {
                document.getElementById("daftar").disabled = true;
            }
        }
        function confirmPassword() {
            if (cPw.value == pw.value) {
                document.getElementById('check2').style.visibility = 'visible';
                cpass = true
            } else {
                document.getElementById('check2').style.visibility = 'hidden';
                cpass = false;
            }

            if (pass && cpass) {
                document.getElementById("daftar").disabled = false;
            } else {
                document.getElementById("daftar").disabled = true;
            }
        }
    </script>
</html>
>>>>>>> Stashed changes
