<?php
App::uses('AppModel', 'Model');
/**
 * Cocineros-platillo Model
 *
 * @property Cocinero $Cocinero
 * @property Platillo $Platillo
 */
class Cocineros-platillo extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'cocinero_id';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Cocinero' => array(
			'className' => 'Cocinero',
			'foreignKey' => 'cocinero_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Platillo' => array(
			'className' => 'Platillo',
			'foreignKey' => 'platillo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
