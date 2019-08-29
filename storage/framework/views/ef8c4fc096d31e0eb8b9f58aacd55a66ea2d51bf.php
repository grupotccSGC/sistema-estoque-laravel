		

	<?php $__env->startSection('conteudo'); ?>


	<?php if(empty($dados)): ?>
	<div class="alert alert-sucess">
		<p>Você não tem produtos cadastrados</p>
	</div>
<?php else: ?>
    <h1>Lista de Produtos</h1>
	<table class="table table-hover">

		<thead>
			<tr>
				<th>Nome</th>
				<th>Descrição</th>
				<th>quantidade</th>
				<th>valor</th>

			</tr>
		</thead>
		<tbody>
			<?php foreach ($dados as $v){?>

				<tr class="<?php echo e($v->quantidade <= 1 ? 'danger':''); ?>

					">

					<td><?php echo e($v->nome); ?></td>
					<td><?php echo e($v->descricao); ?></td>
					<td><?php echo e($v->quantidade); ?></td>
					<td><?php echo e($v->valor); ?></td>
					<td>
						<a href="produto/remove/<?php echo e($v->id); ?>" onclick="a(<?php echo e($v->id); ?>)">delete</a>
					</td> 
					<td><a href="produto/mostra/<?php echo e($v->id); ?>">exibir</a></td>

				</tr>
			<?php }?>
		</tbody>
	</table>
<?php endif; ?>
	<h4>
		<span class="label label-danger pull-right">Um ou menos itens no estoque</span>
	</h4>
<?php if(old('nome')): ?>
 <div class="alert alert-success">
 	<strong>Sucess!</strong>
 	<p> O produto <?php echo e(old('nome')); ?> foi adicionado.</p>
</div>
<?php endif; ?>


	<script type="text/javascript">

		function a(id){
			alert(id);
		}
	</script>


	<?php $__env->stopSection(); ?>


<?php echo $__env->make('home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>