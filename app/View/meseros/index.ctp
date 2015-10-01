 <br>

<?php
  $this->Paginator->options(array(
          'update' => '#contenedro-meseros',
          'before' =>$this->Js->get('#procesando')->effect('fadeIn',array('buffer'=>false)),
          'complete'=> $this->Js->get('#procesando')->effect('fadeOut',array('buffer'=>false))
          ));

?>          

<div id= "contenedor-meseros"></div> 

<h1> Lista De Meseros </h1>
 <table cellpadding="1" cellspacing="2" border="1" class="table table-striped" id="example">
 
  	 <tr>
   		 <td>id</td>
 	  	 <td>Nombre</td>
 	 	   <td>Apellido</td>
 	 	   <td>Acciones</td> 
     </tr>

   <?php foreach ($meseros as $mesero) :?>
      <tr>
        <td><?php echo $mesero['Mesero']['id'] ;?></td>
        <td><?php echo $mesero['Mesero']['nombre'];?></td>
        <td><?php echo $mesero['Mesero']['apellido'];?></td>
        <td>
         <?php echo $this->Html->link(
          'Detalle',
        array(
        'controller' => 'meseros',
        'action' => 'ver',$mesero['Mesero']['id'],
         'type'=>'button',
         'class'=>'btn btn-sm btn-default')
           ); ?>         
        </td>  
      </tr>
   <?php endforeach;?>       
 </table>
   
