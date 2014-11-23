<?php

/**
 * A simple example controller
 *
 */
class HomeController extends BaseController
{
	
	public function showAction()
	{
		return $this->renderView('welcome');
	}

	public function responseAction()
	{
		return $this->json(Array('status' => 'error'), 400);
	}

	public function notfoundAction()
	{
		return $this->response('Content not found', 404, 'Not Found');	
	}

} // END class HomeController extends BaseController
