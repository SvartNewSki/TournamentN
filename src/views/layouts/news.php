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
    <?
    use core\models\BaseView;
    foreach($news as $key => $article){
      BaseView::renderSingle('/components/article', [
        'article' => $article,
        'id' => $key
      ]);
    }
    ?>
    </div>
    </div>
    </div>
  </body>
</html>
