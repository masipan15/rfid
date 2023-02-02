<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="/loginproses" method="post">
        @csrf
    <div class="container">
    <div class="">
        <label for="" class="">Email</label>
        <input type="text" name="email">
    </div>
    <div class="">
        <label for="" class="">Password</label>
        <input type="password" name="password">
    </div>
    </div>
    <button type="submit" class="btn btn-info-sm">Login</button>
    </form>
</body>
</html>
