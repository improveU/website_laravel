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
        <section class="login">
            <h1 class="loginTitel">Login</h1>
        
            <!--
                Apple Login
                Google Login
            -->
            
                <form method="POST">
                    <label for="email">Email </label><br>
                    <input type="email" id="email" name="email"><br>
                    <label for="password">Password</label><br>
                    <input type="password" id="password" name="password"><br>
                
                    <div class="buttonSection">
                        <input type="submit" value="Sign in">
                        <a href="/register" class="registerButton">Register</a>

                    </div>
                    
        
        
                </form>
            
        </section>
        <div>

        </div>
    </section>
</body>
</html>