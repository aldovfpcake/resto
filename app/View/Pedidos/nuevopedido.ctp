<br>
<h1> Nuevo Pedido </h1>

<?php
     echo $this->form->Create('Peidos', array('class' => 'form-horizontal'));
     echo $this->form->label("Pedido Nro =");
     echo $nropedi;
     echo $this->form->input('Platillo',array('class'=>'form-control'));
     echo $this->form->input('Cantidad',array('class'=>'form-control'));
     echo $this->form->end('Aceptar',array('class'=>'btn btn-primary'));
 ?>    