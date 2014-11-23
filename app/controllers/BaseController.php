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
	public function renderView( $view, Array $params = Array(), $code = 200)
	{
		$content = $this->view->render($view, $params);

		$this->response->setStatusCode($code, NULL);
		$this->response->setContent($content);
	}

	/**
	 * Return a json response
	 *
	 * @return void
	 * @author Dan Cox
	 */
	public function json($content = Array(), $code = 200, $type = NULL)
	{
		$this->response->setStatusCode($code, $type);
		$this->response->setJsonContent($content);
	}

	/**
	 * Returns a basic response
	 *
	 * @return void
	 * @author Dan Cox
	 */
	public function response($content = '', $code = 200, $type = NULL)
	{
		$this->response->setStatusCode($code, $type);
		$this->response->setContent($content);
	}
	
} // END class BaseController extends Controller
