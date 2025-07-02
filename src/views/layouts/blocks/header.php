<div class="header">
    <div class="logo">LOGO</div>
    <div class="nav">
    <ul class="ul_nav">
        <li><a href="/index.php">Home</a></li>
        <li><a href="/Tournaments.php">Tournament</a></li>
        <?php
            if(isset($_COOKIE['login'])) { ?>
                <li><a href="/user.php">Кабинет пользователя</a></li>
                <li><a href="/lib/exit.php">Выйти</a></li>
                <?php }
            else{ ?>
               <li><a href="/auth.php">Auth</a></li>
               <li><a href="/register.php">Register</a></li>
           <?php }
        ?>

        <li>News</li>
        
    </ul>
    </div>
    <div class="lang">EN</div>
</div>