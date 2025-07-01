<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/css/style.css" />
    <link rel="stylesheet" href="/css/tournaments.css">
    <title>Личный кабинет</title>
  </head>
  <body>
  <?php require_once "/ospanel/domains/Tournaments/blocks/header.php"; ?>
  
    <div class="title_text"> 
        <p>Кабинет <span class="text_color"> Пользователя </span> <?=$_COOKIE ['login']; ?></p>
    </div>
    
    
      </div>
      
    </div>
    <?php require_once '/ospanel/domains/Tournaments/blocks/footer.php'; ?>
  </body>
</html>
