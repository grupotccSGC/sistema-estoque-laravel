<?php $__env->startSection('conteudo'); ?>
<h1> cadastro de novos  produtos</h1>
<form action="<?php echo e(action('ProdutorController@adicionar
')); ?>" class="form" method="POST">

<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

	<div class="form-group">
		<label>Nome</label>
		<input class="form-control" type="text" name="nome" required>
	</div>


	<div class="form-group">

		<label for="">Descrição</label>
		<input type="text" class="form-control" required name="descricao">
	</div>


	<div class="form-group">
		<label for="">Quantidade</label>
		<input type="number" class="form-control" name="quantidade" required>
	</div>



<div class="form-group">
	<label for="">Valor</label>
	<input type="text" class="form-control" name="valor" required="">
</div>

<input type="submit" class="btn btn-primary btn-block " value="adicionar">

</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>