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
   		 <td><?php echo $this->paginator->sort('id');?></td>
 	  	 <td><?php echo $this->paginator->sort('nombre');?></td>
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
  <?php
    echo $this->Paginator->counter(array(
    'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
    ));
    ?>  </p>
    <ul class="pagination">
      <li> <?php echo $this->Paginator->prev('< ' . __('previous'), array('tag' => false), null, array('class' => 'prev disabled')); ?> </li>
      <?php echo $this->Paginator->numbers(array('separator' => '', 'tag' => 'li', 'currentTag' => 'a', 'currentClass' => 'active')); ?>
      <li> <?php echo $this->Paginator->next(__('next') . ' >', array('tag' => false), null, array('class' => 'next disabled')); ?> </li>
    </ul> 
</div>