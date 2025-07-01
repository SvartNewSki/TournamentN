<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/style.css" />
  <title>Document</title>
</head>
<body>
<?php require_once "/ospanel/domains/Tournaments/blocks/header.php"; ?>
</body>
</html>
<form method="post" action="/lib/reg.php">
  <div class="inline">
    <div>
      <label>Login</label>
      <input type="text" name="login" />
    </div>
    <div>
      <label> name</label>
      <input type="text" name="username" />
    </div>
  </div>
  <label for="">Email</label>
  <input type="email" name="email" class="one-line" />

  <label for="">Password</label>
  <input type="password" name="password" class="one-line" />
  <button type="submit">Зарегистрироваться</button>
</form>
<?php require_once '/ospanel/domains/Tournaments/blocks/footer.php'; ?>