
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/style.css" />
  <link rel="stylesheet" href="/css/register.css">
  <title>Личный кабинет</title>
</head>
<body>
</body>
</html>
    <form method="post" action="/auth" class="backBlock">
    <span class='ttl'>Signing in</span>
    <div class="block">
        <input type="Login" name="login"  placeholder="Login"/>
        <input type="password"  name="password" class="lowerInput" placeholder="Password"/>
    </div>
    <div class="btnBack">
        <button type="submit" class="btn">Sign in</button>
    </div>
    <div class="questions">
        <input type="checkbox" class='checkbox'>
        <span class="quest">Remember me</span>
        <span class="quest"><a href="/auth" class="forgot">Forgot passoword?</a></span>
    </div>
    </form>