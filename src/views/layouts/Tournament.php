<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/assets/css/style.css" />
    <link rel="stylesheet" href="/assets/css/tournaments.css">
    
    <title>Tournament</title>
  </head>
  <body>
    <div class="title_text"> 
        <p><span class="text_color"> Tournaments </span></p>
        <?

        ?>
    </div>
    <div class="cards">
    <?foreach($tours as $id=>$tournament):?>
      <a class="card" href="/tournament/<?= $id?>" > 
        <h2><?=$tournament['discipline']?></h2>
        <p><?=$tournament['start_time']?></p>
        <p><?=substr($tournament['description'], 0, 250)?></p>
        <img src="/assets/img/codka.jpg" alt="">
      </a> 
    <? endforeach?>
    </div>
    </div>
    </div>
  </body>
</html>
