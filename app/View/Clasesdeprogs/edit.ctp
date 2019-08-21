<div class="clasesdeprogs form">
<?php echo $this->Form->create('Clasesdeprog'); ?>
	<fieldset>
		<legend><?php echo __('Edit Clasesdeprog'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('notas');
		echo $this->Form->input('link');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Clasesdeprog.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Clasesdeprog.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Clasesdeprogs'), array('action' => 'index')); ?></li>
	</ul>
</div>
