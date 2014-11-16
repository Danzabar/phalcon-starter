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
	public function renderView( $view, Array $params = Array() )
	{
		$content = $this->view->render($view, $params);

		$this->response->setContent($content);
	}
	
} // END class BaseController extends Controller
