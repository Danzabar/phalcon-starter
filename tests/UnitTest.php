<?php

use Phalcon\Di;
use \Phalcon\Test\UnitTestCase as PhalconTestCase;
use Phalcon\Mvc\Application;


/**
 * The standard unit test class that contains base behaivour for other unit tests
 *
 * @package Phalcon-Starter
 * @subpackage Tests
 * @author Dan Cox
 */
class UnitTest extends PhalconTestCase
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
	 * Loaded Boolean
	 *
	 * @var Boolean
	 */
	private $_loaded = false;


	/**
	 * Set up test variables
	 *
	 * @return void
	 * @author Dan Cox
	 */
	public function setUp(Phalcon\DiInterface $di = NULL, Phalcon\Config $config = NULL)
	{
		$di = DI::getDefault();

		parent::setUp($di);

		$this->_loaded = true;
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
	 * Destruct function is called when a test finishes.
	 *
	 * @return void
	 * @author Dan Cox
	 */
	public function __destruct()
	{
		#if(!$this->_loaded)
		#{
		#	throw new \PHPUnit_Framework_IncompleteTestError("Please run parent::setup");
		#}
	}


} // END class UnitTest extends PhalconTestCase
