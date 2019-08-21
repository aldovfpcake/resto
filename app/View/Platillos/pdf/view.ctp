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
			<?php echo $this->Html->link($platillo['CategoriaPlatillo']['CATEGORIA'], array('controller' => 'categoria_platillos', 'action' => 'view', $platillo['CategoriaPlatillo']['ID'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Foto'); ?></dt>
		<dd>
			<?php echo h($platillo['Platillo']['foto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Foto Dir'); ?></dt>
		<dd>
			<?php echo h($platillo['Platillo']['foto_dir']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
