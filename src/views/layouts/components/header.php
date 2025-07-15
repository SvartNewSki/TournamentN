<div class="header">
    <div class="logo">
        <img src="/img/logo-fox-flatten.svg" alt="FB" height="100 em" />
    </div>
    <div class="nav">
    <ul class="ul_nav">
        <li><a href="/index">Home</a></li>
        <li><a href="/Tournaments">Tournaments</a></li>
        <?php
use core\models\AppUser;

            if(isset($_COOKIE['identity'])) { ?>
                <li><a href="/user">Кабинет </a></li>
                <li><a href="/exit">Выйти</a></li>
                <?php }
            else{ ?>
            <?php if (AppUser::isGuest()): ?>
               <li><a href="/register">Register</a></li>
               <li><a href="/auth">Auth</a></li>
            <?php else: ?>
                <li><a href="/user">User</a></li>
            <?php endif ?>
           <?php }
        ?>

        <li><a href="/news">News</a></li>
        
    </ul>
    </div>
    <div class="lang">RU</div>
</div>