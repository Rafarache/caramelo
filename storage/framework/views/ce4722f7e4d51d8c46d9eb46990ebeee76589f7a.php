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
			<center><a href="<?php echo e(url('/')); ?>">
			<img src="logo_caramelo.png" alt="Site Caramelo" width="700"></a></center>
        </div>
        <div class="nav_container">
            <a class="nav_button button" href="<?php echo e(url('/pesquisa')); ?>">PESQUISA</a>
            <a class="nav_button button" href="<?php echo e(url('/cadastro')); ?>" style="background-color: #4b2b04">CADASTRO</a>
            <a class="nav_button button" href="<?php echo e(url('/sobre')); ?>">SOBRE</a>
        </div>
		<div class="main_container">
			<h1>CADASTRO</h1>
		</div>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\caramelo.git\trunk\resources\views/cadastro.blade.php ENDPATH**/ ?>