<br>

<h1> Crear Mesero </h1>

<?php
     echo $this->form->Create('Mesero', array('class' => 'form-horizontal'));
     echo $this->form->input('dni',array('class'=>'form-control'));
     echo $this->form->input('nombre',array('class'=>'form-control'));
     echo $this->form->input('apellido',array('class'=>'form-control'));
     echo $this->form->input('telefono',array('class'=>'form-control'));
     echo $this->form->end('Aceptar',array('class'=>'btn btn-primary'));
 ?>    

