<div class="header">
    <div class="logo">
        <img src="/img/logo-fox-flatten.svg" alt="FB" height="100 em" />
    </div>
    <div class="nav">
    <ul class="ul_nav">
        <li><a href="/index">Home</a></li>
        <li><a href="/Tournaments">Tournaments</a></li>
        <?php
            if(isset($_COOKIE['login'])) { ?>
                <li><a href="/user">Кабинет пользователя</a></li>
                <li><a href="/lib/exit.php">Выйти</a></li>
                <?php }
            else{ ?>
               <li><a href="/auth">Auth</a></li>
               <li><a href="/register">Register</a></li>
           <?php }
        ?>

        <li><a href="/news">News</a></li>
        
    </ul>
    </div>
    <div class="lang">RU</div>
</div>