<style type="text/css">
    .form-box{
      max-width: 350px;
      position: relative;
      margin: 5% auto;
    }
  </style>
<br/>
<br/>
<br/>
<div class="form-box">
         <h3> Actualización de Precios </h3>
	<?php echo $this->Form->create('Actualizar',array('class' => 'form-horizontal')); 
          echo $this->Form->input('Porcentaje',array('class'=>'form-control','type'=>'number'));
		  echo $this->form->end('Aceptar',array('class'=>'btn btn-primary')); ?>

		  
</div>