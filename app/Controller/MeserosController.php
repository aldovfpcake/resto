<?php
  /**
  * 
  */
  class MeserosController extends AppController
  {
    public 	$helpers    = array('Html','Form');
    public  $component  = array('Session');
    public  $paginate   = 'oagu';
    
    /* prueba

    con git para recuperar archivo original
    */

    public function index()
    {
      $this->set('meseros',$this->Mesero->find('all'));
      

    }

    public function ver($id = null){

           if (!$id) {

                 throw new Exception("Datos Invalidos", 1);
                      } 
            $mesero = $this->Mesero->findById($id);
                     /* $this->Cake->findById(7);*/     

         
            if(!$mesero){
              throw new Exception("Error No Existe el mesero", 1);
           }

           $this->set('mesero',$mesero); 

    }  

    public function nuevo(){
           
           if($this->request->is('post'))
           {

            $this->Mesero->create();
            if($this->Mesero->save($this->request->data)) 
              {
                $this->Session->setFlash('El mesero ha sido creado');
                return $this->redirect(array('action'=>'index'));
               }  
           
              $this->Session->setFlash('Error No Se Pudo Grabar El Registro');

           }
           




    } 
      
   
  }

?>