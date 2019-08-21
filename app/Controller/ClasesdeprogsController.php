<?php
App::uses('AppController', 'Controller');
/**
 * Clasesdeprogs Controller
 *
 * @property Clasesdeprog $Clasesdeprog
 * @property PaginatorComponent $Paginator
 */
class ClasesdeprogsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Clasesdeprog->recursive = 0;
		$this->set('clasesdeprogs', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Clasesdeprog->exists($id)) {
			throw new NotFoundException(__('Invalid clasesdeprog'));
		}
		$options = array('conditions' => array('Clasesdeprog.' . $this->Clasesdeprog->primaryKey => $id));
		$this->set('clasesdeprog', $this->Clasesdeprog->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Clasesdeprog->create();
			if ($this->Clasesdeprog->save($this->request->data)) {
				$this->Session->setFlash(__('The clasesdeprog has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The clasesdeprog could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Clasesdeprog->exists($id)) {
			throw new NotFoundException(__('Invalid clasesdeprog'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Clasesdeprog->save($this->request->data)) {
				$this->Session->setFlash(__('The clasesdeprog has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The clasesdeprog could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Clasesdeprog.' . $this->Clasesdeprog->primaryKey => $id));
			$this->request->data = $this->Clasesdeprog->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Clasesdeprog->id = $id;
		if (!$this->Clasesdeprog->exists()) {
			throw new NotFoundException(__('Invalid clasesdeprog'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Clasesdeprog->delete()) {
			$this->Session->setFlash(__('The clasesdeprog has been deleted.'));
		} else {
			$this->Session->setFlash(__('The clasesdeprog could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
