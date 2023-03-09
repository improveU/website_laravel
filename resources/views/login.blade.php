

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
    <title>Login</title>
</head>
<body>
    <section class="splitTwo">
        div
            logo

            title = var xyz

            form




        <section class="login">
        
            <x-logo/>
            <x-twoSplitTitle :title="$title = 'Login'" />
            

            
            <h1 class="loginTitel">Login</h1>
        
            <!--
                Apple Login
                Google Login
            -->
            
                <form method="POST">
                    <label for="email" style="margin-top: 1%"><strong>Email<strong> </label><br>
                    <input type="email" id="email" name="email" class="inputBox"><br>
                    <label for="password" style="margin-top: 1%">Password</label><br>
                    <input type="password" id="password" name="password"><br>
                
                    <div class="buttonSection">
                        <input type="submit" value="log in">
                        <a href="/register" class="registerButton">Register</a>

                    </div>
                    
        
        
                </form>
            
        </section>
        <section class="picture">

        </section>
    </section>
</body>
</html>