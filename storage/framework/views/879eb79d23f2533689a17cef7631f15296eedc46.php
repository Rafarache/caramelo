<!DOCTYPE html>
<?php
use App\Http\Controllers\ONGController;
use App\Models\Ong_log;
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
				<h1>Login ONGS</h1>
				<?php if(session('message')): ?>
				<div class= "alert alert-danger alert-block":
					<button type="button" class="close" data-dismiss="alert">x</button>
					<strong><?php echo e(session('message')); ?></strong></div>
				<?php endif; ?>
								
				<?php if(session()->has('ONG')): ?>
					<meta http-equiv="refresh" content="0; url='/ongs_mng'" />
				<?php endif; ?>
					
				<form class="" action="<?php echo e(URL::to('/logar_ong')); ?>" method="post">
					<hr>Email</hr>&emsp;<input type="email" name="email" value="" placeholder="Enter your email">
					<hr>Senha</hr>&emsp;<input type="password" name="senha" value="" placeholder="Enter your password">
					<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
					&emsp;<button type="submit" name"button">Logar</button>
				</form>
				<a href='/ong_register'>Register ONG</a>
				</div>
		</div>
		
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\caramelo-main\resources\views/ong_login.blade.php ENDPATH**/ ?>