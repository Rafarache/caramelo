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
            <?php include 'css/filter.css'; ?>
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
            <a class="nav_button button" href="<?php echo e(url('/pesquisa')); ?>" style="background-color: #4b2b04">PESQUISA</a>
            <a class="nav_button button" href="<?php echo e(url('/cadastro')); ?>">CADASTRO</a>
			<a class="nav_button button" href="<?php echo e(url('/login')); ?>">LOGIN</a>
			<a class="nav_button button" href="<?php echo e(url('/ong_login')); ?>">ONGS</a>
            <a class="nav_button button" href="<?php echo e(url('/sobre')); ?>">SOBRE</a>
        </div>
        <div class="main_container" style="	display: flex;flex-wrap: wrap;">
			<div class="filter">
                <div class="collumn">
                    Espécie: 
                    <a class="filter_button" href="<?php echo e(route('pesquisa', ['espécie' => 'Cachorro', 'porte' => request('porte')])); ?>">Cachorro</a>
                    <a class="filter_button" href="<?php echo e(route('pesquisa', ['espécie' => 'Gato', 'porte' => request('porte')])); ?>">Gato</a>
                </div>
                <div class="collumn">
                    Porte: 
                    <a class="filter_button" href="<?php echo e(route('pesquisa', ['espécie' => request('espécie'), 'porte' => 'Pequeno'])); ?>">Pequeno</a>
                    <a class="filter_button" href="<?php echo e(route('pesquisa', ['espécie' => request('espécie'), 'porte' => 'Medio'])); ?>">Médio</a>
                    <a class="filter_button" href="<?php echo e(route('pesquisa', ['espécie' => request('espécie'), 'porte' => 'Grande'])); ?>">Grande</a>
                </div>
                <a class="filter_button todos" href="pesquisa">Todos</a>
            </div>
            <?php $__currentLoopData = $pets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="/pets/<?php echo e($pet->id); ?>" class="pet_card" >
                <?php if(!empty($pet->image)): ?>
                    <img class="pet_card_image" src="uploads/<?php echo e($pet->image); ?>">
                <?php endif; ?>
                <?php if(empty($pet->image)): ?>
                    <img class="pet_card_image" src="no_image.jpg"/> 
                <?php endif; ?>
                <div class="pet_card_description">
                    <div class="pet_card_text keep_size">
                        Nome: <?php echo e($pet->nome); ?> <br>
                        Espécie: <?php echo e($pet->espécie); ?> <br>
                        ONG: <?php echo e($pet->ong); ?> <br>
                        Temperamento: <?php echo e($pet->temperamento); ?> <br>
                        Porte: <?php echo e($pet->porte); ?> <br>
                    </div>
                    <div class="box_status keep_size">
                        Status:
                        <?php if($pet->status === 'Lar Temporario'): ?>
                            <div class="status">Lar temporário</div>
                        <?php endif; ?>
                        <?php if($pet->status === 'Aguardando'): ?>
                            <div class="status">Aguardando</div>
                        <?php endif; ?>
                        <?php if($pet->status === 'Adotado'): ?>
                            <div class="status">Adotado</div>
                        <?php endif; ?>
                    </div>
                </div>
            </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div>
    </body>
</html>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\caramelo.git\trunk\resources\views/pesquisa.blade.php ENDPATH**/ ?>