<?php

/**
 * The base task class 
 *
 * @package Phalcon starter
 * @subpackage CLI
 * @author Dan Cox
 */
class BaseTask extends \Phalcon\CLI\Task
{
	/**
	 * The task name
	 *
	 * @var string
	 */
	protected $name;

	/**
	 * The Task description
	 *
	 * @var string
	 */
	protected $description;

	/**
	 * The help action lists the task and some useful information about it, if its there.
	 *
	 * @return void
	 * @author Dan Cox
	 */
	public function helpAction()
	{
		if(!is_null($this->name))
		{
			echo $this->name."\n";
		}	

		if(!is_null($this->description))
		{
			echo $this->description."\n";
		}

		if(is_null($this->name) && is_null($this->description))
		{
			echo "There is no information on this task";
		}
	}

} // END class BaseCommand extends \Phalcon\CLI\Task
