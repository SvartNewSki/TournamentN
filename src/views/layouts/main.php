<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/assets/css/style.css" />
    <link rel="stylesheet" href="/assets/css/card.css" />
        
    <title>Tournament</title>
  </head>
  <body>
    <div class="main">
      <div class="title">WEBSITE NAME</div>
      <div class="subtitle">Lorem Ipsum Text</div>
        <div class="titleInfo">
          <div class="postmain">
            <div class="carousel-images">
              <?php
                use core\models\BaseView;
                $i = 0;
                foreach($tournaments as $key => $tournament) {
                  BaseView::renderSingle('/components/tournament-slide', array_merge([
                    'image' => $images[$i] ?? "/img/witcher.jpg",
                    'tournament' => $tournament,
                    'id' => $key,
                  ]));
                  $i++;
                }
              ?>
            </div>
            <button class="carousel-btn prev-btn">&lt;</button>
            <button class="carousel-btn next-btn">&gt;</button>
          </div>
      </div>
      <div class="lower_block">
        <div class="titleRG">LAST <span class="games">NEWS</span></div>
        <div class="text_lower_block">
          Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Itaque earum
          rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus
          maiores alias consequatur aut perferendis doloribus asperiores
          repellat.
        </div>
      </div>
      <div class="news cards">
        <?php
          foreach($news as $key => $article){
            BaseView::renderSingle('/components/article', [
              'article' => $article,
              'id' => $key
            ]);
          }
        ?>
      </div>
    </div>
  <script src="/js/script.js"></script>
  </body>
  
</html>



<!-- $this->setCssFile(ASSETS_CSS_PATH . "site-index.css"); -->