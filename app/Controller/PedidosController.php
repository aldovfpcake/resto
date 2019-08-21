<?php
  /**
  * 
  */
  class PedidosController extends AppController{
  
        public function nuevopedido(){
        $nropedido = 10;

        $this->set('nropedi',$nropedido);
        echo $this->data;
		

        }   		
  
       




  }
  
  ?>