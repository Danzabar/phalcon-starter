<?php


/**
 * An Example Test case
 *
 * @author Dan Cox
 */
class HomeTest extends UnitTest
{

	/**
	 * Test the test case
	 *
	 * @return void
	 * @author Dan Cox
	 */
	public function test_TestCase()
	{
		$di = $this->getDI();
		
		$controller = new HomeController;
		
		$controller->showAction();
		
		$this->assertEquals('<p>You are flying with Phalcon</p>', trim($di->getResponse()->getContent()));
	}
	
} // END class HomeTest extends UnitTest
