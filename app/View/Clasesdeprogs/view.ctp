<div class="clasesdeprogs view">
<h2><?php echo __('Clasesdeprog'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($clasesdeprog['Clasesdeprog']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Notas'); ?></dt>
		<dd>
			<?php echo h($clasesdeprog['Clasesdeprog']['notas']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Link'); ?></dt>
		<dd>
			<?php echo h($clasesdeprog['Clasesdeprog']['link']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Clasesdeprog'), array('action' => 'edit', $clasesdeprog['Clasesdeprog']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Clasesdeprog'), array('action' => 'delete', $clasesdeprog['Clasesdeprog']['id']), array(), __('Are you sure you want to delete # %s?', $clasesdeprog['Clasesdeprog']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Clasesdeprogs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Clasesdeprog'), array('action' => 'add')); ?> </li>
	</ul>
</div>
