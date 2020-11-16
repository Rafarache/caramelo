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
				<h1>Login</h1>
				<?php if(session('error')): ?>
				<div class= "alert alert-danger alert-block":
					<button type="button" class="close" data-dismiss="alert">x</button>
					<strong><?php echo e(session('error')); ?></strong></div>
				<?php endif; ?>
				<form class="" action="<?php echo e(URL::to('/logar')); ?>" method="post">
					<hr>Email</hr>&emsp;<input type="email" name="email" value="" placeholder="Enter your email">
					<hr>Senha</hr>&emsp;<input type="password" name="senha" value="" placeholder="Enter your password">
					<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
					&emsp;<button type="submit" name"button">Logar</button>
				</form>
		</div>
		
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\caramelo-main\caramelo-main\resources\views/login.blade.php ENDPATH**/ ?>