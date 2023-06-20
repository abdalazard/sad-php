<div class="row">
    <form action="<?php $router->toSrc('Controller/NewsLetter', 'NewsLetter.php'); ?>" METHOD='POST'>
        <div class="col s6 offset-s3">
            <input type="text" placeholder="E-mail" name="email" required>
        </div>
        <div class="col s6 offset-s3">
            <input type="submit" value="Assinar" class="button btn">
        </div>
    </form>
</div>