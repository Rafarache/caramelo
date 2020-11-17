<!DOCTYPE html>
<?php
use App\Http\Controllers\UserController;
?>


<?php $__env->startSection('content'); ?>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
		<title>Caramelo | Site de Adoção e Lar Temporário</title>
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
			<?php if(Auth::check()): ?>
				<a class="nav_button button" href="<?php echo e(url('/')); ?>">Bem-Vindo <?php echo e(Auth::user()->name); ?></a>
			<?php endif; ?>
			<a class="nav_button button" href="<?php echo e(url('/pesquisa')); ?>">PESQUISA</a>
            <a class="nav_button button" href="<?php echo e(url('/cadastro')); ?>">CADASTRO</a>
			<a class="nav_button button" href="<?php echo e(url('/login')); ?>">LOGIN</a>
			<a class="nav_button button" href="<?php echo e(url('/ong_login')); ?>">ONGS</a>
            <a class="nav_button button" href="<?php echo e(url('/sobre')); ?>" style="background-color: #4b2b04">SOBRE</a>
        </div>
		<div class="main_container">
			<h1>SOBRE</h1>
			
			Site desenvolvido para a disciplina INF01127- Engenharia de Software N - Turma B - 2020/1 - UFRGS <br>
			Profa. Dra. Lucin&eacute;ia Heloisa Thom
			
			<br><br>
			<h2>Integrantes</h2>
			
			Andrei Procaska Luchese Monteiro <br>
			Rafael Marques Rache <br>
			Jo&atilde;o Fernando Almeida Caemerer <br>
			Bruna Casagranda Cagliari <br>
			Andrews Lima Rodrigues <br>
			
		</div>		
    </body>
</html>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\caramelo.git\trunk\resources\views/sobre.blade.php ENDPATH**/ ?>