<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=RobotoDraft:300,500">
<link rel="stylesheet" href="{{ asset('acstemplate/assets/register.css') }}">


<body>
	<form action="/loginproses" method="POST">
        @csrf
    <div class="login-wrap">
        <div class="login-html">
            <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
            <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
            <div class="login-form">
                <div class="sign-in-html">
                    <div class="group">
                        <label for="user" class="label">Email</label>
                        <input id="user" name="email" type="text" class="input">
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Password</label>
                        <input id="pass" name="password" type="password" class="input" data-type="password">
                    </div>
                    <div class="group">
                        <input id="check" type="checkbox" class="check" checked>
                        <label for="check"><span class="icon"></span> Keep me Signed in</label>
                    </div>
                    <div class="group">
                        <input type="submit" class="button" value="Sign In">
                    </div>
                    <div class="hr"></div>
                    <div class="foot-lnk">
                        <a href="maintenance">Forgot Password?</a>
                    </div>
                </div>
            </div>
        </form>
</body>

<script src="http//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="{{ asset('acstemplate/asset/register.js') }}"></script>

</html>

<script>
    function myFunction() {
        var x = document.getElementById("password");
        if (x.type == "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>
