<?php

use Phalcon\Mvc\Controller;

/**
 * The Base controller defines basic behaivour for all other controllers
 *
 */
class BaseController extends Controller
{

	/**
	 * Renders and outputs a view
	 *
	 * @return String
	 * @author Dan Cox
	 */
	public function output( $view, Array $params = Array() )
	{
		echo $this->view->render($view, $params);

		exit;
	}
	
} // END class BaseController extends Controller
