<?php
App::uses('AppModel', 'Model');
/**
 * CategoriaPlatillo Model
 *
 * @property Platillo $Platillo
 */
class CategoriaPlatillo extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'ID';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'CATEGORIA';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Platillo' => array(
			'className' => 'Platillo',
			'foreignKey' => 'categoria_platillo_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
