<?php

use Phalcon\Di;


/**
 * The standard unit test class that contains base behaivour for other unit tests
 *
 * @package Phalcon-Starter
 * @subpackage Tests
 * @author Dan Cox
 */
class UnitTest extends \PHPUnit_Framework_TestCase
{

	/**
	 * Cache instance
	 *
	 * @var Object
	 */
	protected $_cache;

	/**
	 * Config instance
	 *
	 * @var Object
	 */
	protected $_config;

	/**
	 * The depedancy object
	 *
	 * @var object
	 */
	protected $di;
	
	/**
	 * Set up test variables
	 *
	 * @return void
	 * @author Dan Cox
	 */
	public function setUp()
	{
		$this->di = DI::getDefault();
	}

	/**
	 * Test that the unit test works
	 *
	 * @return void
	 * @author Dan Cox
	 */
	public function test_TestCase()
	{
		$this->assertTrue(TRUE);
	}

	/**
	 * Assert that the response code equals the passed int
	 *
	 * @return Assert
	 * @author Dan Cox
	 */
	public function assertResponseCode($code)
	{
		$headers = $this->di->getResponse()->getHeaders();

		$this->assertEquals($code, trim($headers->get('Status')));
	}

	/**
	 * Returns the Di object
	 *
	 * @return object
	 * @author Dan Cox
	 */
	public function getDi()
	{
		return $this->di;
	}

} // END class UnitTest extends PhalconTestCase
