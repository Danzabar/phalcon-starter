<?php

use Danzabar\CLI\Tasks\Task;

/**
 * A Test Task
 *
 * @package Phalcon starter
 * @subpackage CLI
 * @author Dan Cox
 */
class TestTask extends Task
{

	/**
	 * The name of the task
	 *
	 * @var string
	 */
	protected $name = 'test';

	/**
	 * The description of the task
	 *
	 * @var string
	 */
	protected $description = 'A short helpful description';

	/**
	 * The main action
	 *
	 * @Action
	 * @return void
	 * @author Dan Cox
	 */
	public function main()
	{
		$this->output->writeln('This is the main action');
	}

} // END class TestTask extends BaseTask
