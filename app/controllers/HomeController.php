<?php

/**
 * A simple example controller
 *
 */
class HomeController extends BaseController
{
	
	public function showAction()
	{
		return $this->output('welcome');
	}

} // END class HomeController extends BaseController
