<?php


/**
 * An Example Test case
 *
 * @author Dan Cox
 */
class HomeTest extends UnitTest
{

	/**
	 * The controller instance
	 *
	 * @var Object
	 */
	protected $controller;	

	/**
	 * Set up the test environment
	 *
	 * @return void
	 * @author Dan Cox
	 */
	public function setUp()
	{
		$this->controller = new HomeController;

		parent::setUp();
	}

	/**
	 * Test the test case
	 *
	 * @return void
	 * @author Dan Cox
	 */
	public function test_TestCase()
	{		
		$di = $this->getDI();

		$this->controller->showAction();

		$this->assertEquals('<p>You are flying with Phalcon</p>', trim($di->getResponse()->getContent()));
	}

	/**
	 * Test the response function
	 *
	 * @return void
	 * @author Dan Cox
	 */
	public function test_response()
	{
		$this->controller->responseAction();

		$this->assertResponseCode(400);
	}
	
} // END class HomeTest extends UnitTest
