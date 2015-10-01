<?php
  /**
  * 
  */
  class MeserosController extends AppController
  {
    public 	$helpers    = array('Html','Form','Time','Js');
    public  $component  = array('Session','Paginator');

    public $paginate = array(
            'limit'  =>5,
             'order' => array(
                       'Mesero.id'=>'asc' ));

    public function index()
    {
      $this->paginate['Mesero']['limit'] = 3;
      $this->paginate['Mesero']['order'] = array('Mesero.id' =>'asc');
      /* $this->set('meseros',$this->Mesero->find('all'));*/
      $this->Paginator->settings = $this->paginate;
      $this->set('meseros',$this->paginate());
      

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