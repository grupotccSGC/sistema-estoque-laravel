	
	

<?php $__env->startSection('conteudo'); ?>
<?php if(empty($p)): ?>
<div><p>Não ha produto</p></div>
<?php else: ?>

<h1>Detalhes de produto :<?php echo e($p->nome); ?></h1>

<form action="<?php echo e(action('ProdutorController@atualizar')); ?>" class="form" method="POST">
  
  <input type="hidden" name="id" required value="<?php echo e($p->id); ?>">

	<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" required="">
	
	<div class="form-group">
		<label>Nome</label>
		<input type="text" class="form-control" name="nome" required value="<?php echo e($p->nome); ?>">
	</div>

<div class="form-group">
		<label>Descricao</label>
		<input type="text" class="form-control" name="descricao" required value="<?php echo e($p->descricao); ?>">
	</div>


<div class="form-group">
		<label>Quantidade</label>
		<input type="number" class="form-control" name="quantidade" required value="<?php echo e($p->quantidade); ?>">
	</div>

<div class="form-group">
		<label>Valor</label>
		<input type="text" class="form-control" name="valor" required value="<?php echo e($p->valor); ?>">
	</div>


<button class="btn btn-primary">atualizar</button>


</form>







<?php endif; ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>