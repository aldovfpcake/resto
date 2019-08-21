<?php
App::uses('Clasesdeprog', 'Model');

/**
 * Clasesdeprog Test Case
 *
 */
class ClasesdeprogTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.clasesdeprog'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Clasesdeprog = ClassRegistry::init('Clasesdeprog');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Clasesdeprog);

		parent::tearDown();
	}

}
