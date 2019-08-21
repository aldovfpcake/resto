 <style type="text/css">
    .form-box{
      max-width: 500px;
      position: relative;
      margin: 5% auto;
    }
  </style>

<div class="form-box">
<?php echo $this->Form->create('Add Platillo',array('class' => 'form-horizontal')); ?>
<?php
		echo $this->Form->input('nombre',array('class'=>'form-control'));
		echo $this->Form->input('descripcion',array('class'=>'form-control'));
		echo $this->Form->input('precio',array('class'=>'form-control'));
		echo $this->Form->input('categoria_platillo_id',array('class'=>'form-control'));
		echo $this->Form->input('foto',array('class'=>'form-control'));
		echo $this->Form->input('foto_dir',array('class'=>'form-control'));
	?>
	
<br>
<?php echo $this->form->end('Aceptar',array('class'=>'btn btn-primary')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Platillos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Categoria Platillos'), array('controller' => 'categoria_platillos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categoria Platillo'), array('controller' => 'categoria_platillos', 'action' => 'add')); ?> </li>
	</ul>
</div>
