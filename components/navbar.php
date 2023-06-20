<nav>
    <div class="nav-wrapper navbar">
        <a href="<?php $router->toHomePage(); ?>"><img class="logo" src="src/img/sad.png" /></a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="<?php $router->toPages('login'); ?>" class="link">Login</a></li>
            <li><a href="<?php $router->toPages('register'); ?>" class="link">Cadastre-se</a></li>
            <li><a href="<?php $router->toPages('sobre'); ?>" class="link">Sobre nós</a></li>
        </ul>
    </div>
</nav>