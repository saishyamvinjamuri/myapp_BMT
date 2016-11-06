<!DOCTYPE html>
<!-- https://www.youtube.com/watch?v=m5QrPsivE-Y&list=PLwAKR305CRO-Q90J---jXVzbOd4CDRbVx&index=5 -->
<html>
<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/BMT_Login.css') }}">
    <link rel="icon" type="image/gif" href="http://www.smartadtoronto.com/perfect_chair_icon.jpg" />
</head>
<body>

<div id="header">
    <h1> BookMyTurn </h1>
</div>
<div id="body">
    <div id="login">
        <form method="post">
            <fieldset>
                <legend>Login</legend>
                <p> <input type="text"  required  placeholder="UserName" id="uname"> </p>
                <p> <input type="password"  required placeholder="Password" id="pword"> </p>
                <p> <a href="ForgotPassword.html"> Forgot Password? </a> </p>
                <input type="submit" value="Login" onclick="redirect_Guestuser()">

                <p><span class="btn-round">or</span>
                    <a class="facebook-before"></a>
                    <button class="facebook">Login Using Facbook</button>
                </p>
                <p>
                    <a class="twitter-before"></a>
                    <button class="twitter" onclick=window.location.href='www.twitter.com'>Login Using Twitter</button>
                </p>
                <p>
                    <a class="guestuser_before" href="services.html"></a>
                    <button class="guestuser" type="submit" onclick=redirect_Guestuser()>Guest User</button>
                </p>
            </fieldset>
        </form>
    </div>
</div>


<div id="footer">
    Copyright &copy; Shyam Vinjamuri
</div>

</body>
</html>