<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/assets/css/style.css" />
    <link rel="stylesheet" href="/assets/css/tournaments.css">
    <link rel="stylesheet" href="/assets/css/card.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous"> -->
    <title>News</title>
  </head>
  <body>
    <div class="title_text"> 
        <p><span class="text_color"> NEWS </span></p>
    </div>
    <div class="cards">
    <?foreach($news as $id=>$article):?>
      <a class="card" href="/news/<?= $id?>" >
        <h2><?=$article['title']?></h2>
        <p><?=substr($article['description'], 0, 250)?></p>
        <img src="/assets/img/Frame.jpg" alt="">
      </a> 
    <? endforeach?>
    </div>
    </div>
    </div>
  </body>
</html>
