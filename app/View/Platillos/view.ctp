<div class="platillos view">
<h2><?php echo __('Platillo'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($platillo['Platillo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($platillo['Platillo']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($platillo['Platillo']['descripcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Precio'); ?></dt>
		<dd>
			<?php echo h($platillo['Platillo']['precio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($platillo['Platillo']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($platillo['Platillo']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Categoria Platillo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($platillo['CategoriaPlatillo'][''], array('controller' => 'categoria_platillos', 'action' => 'view', $platillo['CategoriaPlatillo']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Platillo'), array('action' => 'edit', $platillo['Platillo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Platillo'), array('action' => 'delete', $platillo['Platillo']['id']), array(), __('Are you sure you want to delete # %s?', $platillo['Platillo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Platillos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Platillo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categoria Platillos'), array('controller' => 'categoria_platillos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categoria Platillo'), array('controller' => 'categoria_platillos', 'action' => 'add')); ?> </li>
	</ul>
</div>
