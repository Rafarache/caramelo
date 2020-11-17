<!DOCTYPE html>
<?php
use App\Http\Controllers\UserController;
?>

<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <style>
            <?php include 'css/navbar.css'; ?>
            <?php include 'css/index.css'; ?>
        </style>
    </head>
    <body>
        <div class="logo_site">
			<center><img src="logo_caramelo.png" alt="Site Caramelo" width="1320"></center>
        </div>
        <div class="nav_container">
            <a class="nav_button button" href="pesquisa">PESQUISA</a>
            <a class="nav_button button" href="cadastro">CADASTRO</a>
            <a class="nav_button button" href="sobre">SOBREMESA</a>
        </div>        
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\caramelo.git\trunk\resources\views/about.blade.php ENDPATH**/ ?>