<?php

use app\controllers\TournamentController;
use app\models\Tournament;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/tPage.css">
    <title>TournamentPage</title>
</head>
<body>
    <div class="main">
  <div class="tournament_announce">
        <img src="/img/Mask group.png" alt="" />
        <div class="tournament_right">
          <div class="game_title_announce"><?=$tournament['discipline']?></div>
          <div class="tournament_info">
            <ul class="tournament_table">
              <li>Tournament name: <?= $tournament['title'] ?></li>
              <li>Discipline: <?=$tournament['discipline']?></li>
              <li>Register: Until <?=$tournament['start_time']?></li>
              <li><?=$tournament['description']?></li>
            </ul>
          </div>
          <img class="button" src="/img/Vector 3.png" alt="" />
          <div></div>
        </div>
      </div>
    </div>
</body>
</html>