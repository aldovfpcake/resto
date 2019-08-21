<?php
App::uses('AppController', 'Controller');
/*App::uses('meseros', 'Model');*/

/**
 * Platillos Controller
 *
 * @property Platillo $Platillo
 * @property PaginatorComponent $Paginator
 */
class PlatillosController extends AppController {

/**
 * Components
 *
 * @var array
 */

    public $components = array('Paginator', 'RequestHandler', 'Session');

	

    

/**
 * index method
 *
 * @return void
 */
	public function index() {
		/*$lista = $this->Meseros->find("all");*/
		$this->Platillo->recursive = 0;
		$this->set('platillos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		
		if (!$this->Platillo->exists($id)) {
			throw new NotFoundException(__('Invalid platillo'));
		}
		$options = array('conditions' => array('Platillo.' . $this->Platillo->primaryKey => $id));
		
		 $this->pdfConfig = array(
            'download' => true,
            'filename' => 'platillo_' . $id .'.pdf'
        );
		
		$this->set('platillo', $this->Platillo->find('first', $options));
	}

	public function ver($id = null) {
		if (!$this->Platillo->exists($id)) {
			throw new NotFoundException(__('Invalid platillo'));
		}
		$options = array('conditions' => array('Platillo.' . $this->Platillo->primaryKey => $id));
		 echo "paso";
		 $this->pdfConfig = array(
            'download' => true,
            'filename' => 'platillo_' . $id .'.pdf'
        );
		
		$this->set('platillo', $this->Platillo->find('first', $options));
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
/**
 * add method
 *
 * @return void
 */
    public function add() {
		if ($this->request->is('post')) {
			$this->Platillo->create();
			for($i= 1 ; $i< 10;$i++) 
			{ print_r('<br>');}
			
		    print_r($this->request->data);
		if ($this->Platillo->save($this->request->data)) {
		    
        	$this->Session->setFlash(__('The platillo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The platillo could not be saved. Please, try again.'));
			}
		}
		$categoriaPlatillos = $this->Platillo->CategoriaPlatillo->find('list');
		$this->set(compact('categoriaPlatillos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Platillo->exists($id)) {
			throw new NotFoundException(__('Invalid platillo'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Platillo->save($this->request->data)) {
				$this->Session->setFlash(__('The platillo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The platillo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Platillo.' . $this->Platillo->primaryKey => $id));
			$this->request->data = $this->Platillo->find('first', $options);
		}
		$categoriaPlatillos = $this->Platillo->CategoriaPlatillo->find('list');
		$this->set(compact('categoriaPlatillos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Platillo->id = $id;
		if (!$this->Platillo->exists()) {
			throw new NotFoundException(__('Invalid platillo'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Platillo->delete()) {
			$this->Session->setFlash(__('The platillo has been deleted.'));
		} else {
			$this->Session->setFlash(__('The platillo could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}


	public function actualizar(){
	  
	    if ($this->request->is('post')) {
	        for($i= 1 ; $i< 10;$i++) 
			{ print_r('<br>');}
			
              $importe = 450.50;	
              $porcentaje = $this->data['Actualizar']['Porcentaje']; 			  
              $query = "UPDATE PLATILLOS SET PRECIO = "."PRECIO*".$porcentaje."/100"."+PRECIO";
			  print_r($query);
			  $this->Platillo->query($query);
		      $this->Session->setFlash(_('Actualizando Precios'));
			 
		 }
	}
	
	
	
	
	/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Platillo->recursive = 0;
		$this->set('platillos', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Platillo->exists($id)) {
			throw new NotFoundException(__('Invalid platillo'));
		}
		$options = array('conditions' => array('Platillo.' . $this->Platillo->primaryKey => $id));
		$this->set('platillo', $this->Platillo->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Platillo->create();
			if ($this->Platillo->save($this->request->data)) {
				$this->Session->setFlash(__('The platillo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The platillo could not be saved. Please, try again.'));
			}
		}
		$categoriaPlatillos = $this->Platillo->CategoriaPlatillo->find('list');
		$this->set(compact('categoriaPlatillos'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Platillo->exists($id)) {
			throw new NotFoundException(__('Invalid platillo'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Platillo->save($this->request->data)) {
				$this->Session->setFlash(__('The platillo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The platillo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Platillo.' . $this->Platillo->primaryKey => $id));
			$this->request->data = $this->Platillo->find('first', $options);
		}
		$categoriaPlatillos = $this->Platillo->CategoriaPlatillo->find('list');
		$this->set(compact('categoriaPlatillos'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Platillo->id = $id;
		if (!$this->Platillo->exists()) {
			throw new NotFoundException(__('Invalid platillo'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Platillo->delete()) {
			$this->Session->setFlash(__('The platillo has been deleted.'));
		} else {
			$this->Session->setFlash(__('The platillo could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
