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
            <?php include 'css/pet_card.css'; ?>
        </style>
    </head>
    <body>
        <div class="logo_site">
			<center><a href="<?php echo e(url('/')); ?>">
			<img src="../logo_caramelo.png" alt="Site Caramelo" width="700"></a></center>
        </div>
        <div class="nav_container">
			<?php if(Auth::check()): ?>
				<a class="nav_button button" href="<?php echo e(url('/')); ?>">Bem-Vindo <?php echo e(Auth::user()->name); ?></a>
			<?php endif; ?>
            <a class="nav_button button" href="<?php echo e(url('/pesquisa')); ?>" style="background-color: #4b2b04">PESQUISA</a>
            <a class="nav_button button" href="<?php echo e(url('/cadastro')); ?>">CADASTRO</a>
			<a class="nav_button button" href="<?php echo e(url('/login')); ?>">LOGIN</a>
			<a class="nav_button button" href="<?php echo e(url('/ong_login')); ?>">ONGS</a>
            <a class="nav_button button" href="<?php echo e(url('/sobre')); ?>">SOBRE</a>
        </div>
        <div class="main_container" style="display:flex">
            <?php $__currentLoopData = $pets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(!empty($pet->image)): ?>
                    <img class="pet_card_image" src="../uploads/<?php echo e($pet->image); ?>">
                <?php endif; ?>
                <?php if(empty($pet->image)): ?>
                    <img class="pet_card_image" src="no_image.jpg"/> 
                <?php endif; ?>
                <div style="margin-left: 20px;font-size: 2.5rem">
                    Nome: <?php echo e($pet->nome); ?> <br>
                    Espécie: <?php echo e($pet->espécie); ?> <br>
                    ONG: <?php echo e($pet->ong); ?> <br>
                    Temperamento: <?php echo e($pet->temperamento); ?> <br>
                    Porte: <?php echo e($pet->porte); ?> <br>
					Status: <?php echo e($pet->status); ?> <br>
                </div>
				<?php if($pet->status != 'Adotado' && $user_auth): ?>
					<form class="" action="<?php echo e(URL::to('/registra_adocao')); ?>" method="post">
						<?php echo csrf_field(); ?>
						<input type="hidden" name="id_pessoa" value= "<?php echo e($user_id); ?>">
						<input type="hidden" name="id_pets" value= "<?php echo e($pet->id); ?>">
						<input type="hidden" name="status" value= "<?php echo e($pet->status); ?>">
						&emsp;<button type="submit" name"button">ADOTAR</button>
					</form>
				<?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div>		
    </body>
</html>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\caramelo.git\trunk\resources\views/pet_detail.blade.php ENDPATH**/ ?>