<!DOCTYPE html>
<?php
use App\Http\Controllers\ONGController;
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
            <a class="nav_button button" href="<?php echo e(url('/cadastro')); ?>">CADASTRO</a>
			<a class="nav_button button" href="<?php echo e(url('/login')); ?>">LOGIN</a>
			<a class="nav_button button" href="<?php echo e(url('/ong_login')); ?>">ONGS</a>
            <a class="nav_button button" href="<?php echo e(url('/sobre')); ?>">SOBRE</a>
			
        </div>
		<div class="main_container">
			<h1>CADASTRO ONGS</h1>
			<?php if(session('message')): ?>
				<div class= "alert alert-danger alert-block":
					<button type="button" class="close" data-dismiss="alert">x</button>
					<strong><?php echo e(session('message')); ?></strong></div>
			<?php endif; ?>
			<form class="" action="<?php echo e(URL::to('/registro_ong')); ?>" method="post">
				<hr>Nome</hr>&emsp;<input type="text" name="name" value="" placeholder="Enter your name">
				<br>
				<hr>Email</hr>&emsp;<input type="email" name="email" class=form-control placeholder="Enter your email">
				<br>
				<hr>Telefone</hr>&emsp;<input type="text" name="fone" value="" placeholder="Enter your phone">
				<br>
				<hr>Endereço</hr>&emsp;<input type="text" name="endr" value="" placeholder="Enter your address">
				<br>
				<hr>Senha</hr>&emsp;<input type="password" name="senha" class="form-control" placeholder="Enter your password">
				<br>
				<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
				&emsp;<button type="submit" name"button">Register</button>
			</form>
		</div>
		
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\caramelo-main\resources\views/ong_register.blade.php ENDPATH**/ ?>