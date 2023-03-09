<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
    <title>Document</title>
</head>
<body>
    <section class="splitTwo">
        <section class="register">
            <h1 class="registerTitel">Register</h1>

    <form method="POST">
        <label for="username">Username</label><br>
        <input type="text" name="username" class="inputBox"><br>
        <label for="firstname">First name</label><br>
        <input type="text"  name="firstname" class="inputBox"><br>
        <label for="lastname">Last name</label><br>
        <input type="text" name="lastname" class="inputBox"><br>
        <label for="email">Email address</label><br>
        <input type="email" id="email" name="email" class="inputBox"><br>
        <label for="password">Password</label><br>
        <input type="password" id="password" name="password" class="inputBox"><br>
        <label for="repeatpassword">Repeat Password</label><br>
        <input type="password" id="repeatpassword" name="repeatpassword " class="inputBox"><br><br>
        <input type="submit" value="Sign up">


    </form>

</section>
<section class="picture">

</section>
</section>
</body>
</html>
