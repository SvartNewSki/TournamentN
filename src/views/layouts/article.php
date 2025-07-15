<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/article.css">
</head>
<body>
    <div class="article">
        <div class="article_right">
          <div class="article_title"><?=$article['title']?></div>
          <div class="article_info">
            <ul class="article_table">
              <li>Created: <?= $article['created_at'] ?></li>
              <li><?=$article['description']?></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
</body>
</html>