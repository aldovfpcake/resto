<?php
 /**
 * 
 */
 class Mesero extends AppModel
 {
 	public $validate = array('dni' => array(  'rule' => 'numeric',
 									     'message'=>'Solo números'),
 						     'nombre' => array( 'rule' => '^[a-zA-Z_áéíóúñ\s]*$',
                                        'message' => 'Solo letras se Aceptan'),
                             'apellido' => array( 'rule' => '^[a-zA-Z_áéíóúñ\s]*$',
                                        'message' => 'Solo letras se Aceptan'),
                                                            


                             );

     /* public $validate = array(
        'login' => array(
            'alphaNumeric' => array(
                'rule' => 'alphaNumeric',
                'required' => true,
                'message' => 'Letters and numbers only'
            ),
            'between' => array(
                'rule' => array('lengthBetween', 5, 15),
                'message' => 'Between 5 to 15 characters'
            )
        ),
        'password' => array(
            'rule' => array('minLength', '8'),
            'message' => 'Minimum 8 characters long'
        ),
        'email' => 'email',
        'born' => array(
            'rule' => 'date',
            'message' => 'Enter a valid date',
            'allowEmpty' => true
        )
    );*/


 	
 }




?>