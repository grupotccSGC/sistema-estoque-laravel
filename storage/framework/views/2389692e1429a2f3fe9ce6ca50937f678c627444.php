	

		

<?php $__env->startSection('conteudo'); ?>

		
<h1>Detalhes de produto :<?= $p->nome; ?></h1>
		
<ul>
	<li><b>Valor:</b>R$ <?= $p->valor ?></li>
	<li><b>Descrição</b><?= $p->descricao ?> </li>
	<li><b>Quantidade</b> <?php echo $p->quantidade; ?></li>
</ul>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>