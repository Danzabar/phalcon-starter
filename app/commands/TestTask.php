<?php

/**
 * A Test Task
 *
 * @package Phalcon starter
 * @subpackage CLI
 * @author Dan Cox
 */
class TestTask extends BaseTask
{

	/**
	 * The name of the task
	 *
	 * @var string
	 */
	protected $name = 'Test';

	/**
	 * The description of the task
	 *
	 * @var string
	 */
	protected $description = 'A short helpful description';

	/**
	 * The main action
	 *
	 * @return void
	 * @author Dan Cox
	 */
	public function mainAction()
	{
		echo 'The main action in the test task';
	}

} // END class TestTask extends BaseTask
