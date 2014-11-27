<?php

use Danzabar\CLI;

/**
 * A Test Task
 *
 * @package Phalcon starter
 * @subpackage CLI
 * @author Dan Cox
 */
class TestTask extends CLI\Command
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
		$this->output->writeln('This is the main action');
	}

} // END class TestTask extends BaseTask
