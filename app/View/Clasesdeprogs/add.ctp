<div class="clasesdeprogs form">
<?php echo $this->Form->create('Clasesdeprog'); ?>
	<fieldset>
		<legend><?php echo __('Add Clasesdeprog'); ?></legend>
	<?php
		echo $this->Form->input('notas');
		echo $this->Form->input('link');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Clasesdeprogs'), array('action' => 'index')); ?></li>
	</ul>
</div>
