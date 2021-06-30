<!DOCTYPE html>
<html>
    <head>
        <title>Log In - Raben Delivery Service</title>
        <link rel="stylesheet" href="View/css/styleLoginCust.css">
    </head>
    <body>
        <br><h1>Driver</h1>
        <h1>Sign In</h1>
        <p style="color:white">Don't have account?</p>
        <div id="square">
            <form action="loginDriver" method="post">
                <img src="View/img/iconprofile.png" width="70px"><br><br>
                <input type="text" name="iUsername" size="15" maxlength="15" placeholder="Username"/><br><br>
                <img src="View/img/iconkey.png" width="70px"><br><br>
                <input type="password" name="iPassword" size="15" maxlength="15" placeholder="Password"/><br><br><br>
                <input type="checkbox" name="interest" value="Remember"/> Remember me<br>
                <input id="login" type="submit" value="Login" name='loginDriver'>
            </form>
            
        </div>
    </body>
</html>