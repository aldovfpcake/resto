<div class="categoriaPlatillos form">
<?php echo $this->Form->create('CategoriaPlatillo',array('class' => 'form-horizontal')); ?>
	<fieldset>
		<legend><?php echo __('Add Categoria Platillo'); ?></legend>
	<?php
		echo $this->Form->input('CATEGORIA',array('class'=>'form-control'));
	?>
	</fieldset>
<?php echo $this->form->end('Aceptar',array('class'=>'btn btn-primary')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Categoria Platillos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Platillos'), array('controller' => 'platillos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Platillo'), array('controller' => 'platillos', 'action' => 'add')); ?> </li>
	</ul>
</div>
