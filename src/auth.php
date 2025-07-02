<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="/css/style.css" />
    
    <title>Admin Panel</title>
</head>
<body>
    <div class="center_back">
    <form method="post" action="/lib/auth.php" class="auth_block">
        <div class="content">
            <div class="title_auth">Signing In</div>
            <div class="log_pass">
            <input class="login" type="text" placeholder="Username" name='login'>
            </div>
            <div class="log_pass">
            <input class="password" type="password" placeholder="Password" name='password'>
            <button class="login_but">Войти</button>    
        </div>
            
        </div>
    </form>
        <div class="questions">
                <input type="checkbox">
                Remember me
                <a href="/" class="forgot">Forgot passoword?</a>
        </div>
    </div>
</body>
</html>
