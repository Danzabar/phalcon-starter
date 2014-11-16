<?php

/**
 *  The Application file keeps settings specific to the app
 *  
 */
$application = Array (

	/**
	 * Debugging
	 *
	 */
	'debug'					=> TRUE,

	/**
	 * Base URI
	 *
	 */
	'baseUri'				=> '',

	/** 
	 * The Controller Directory
	 *
	 */
	'controllerDir'			=> dirname(__DIR__) . '/controllers/',

	/**
	 * Models Directory
	 *
	 */
	'modelsDir'				=> dirname(__DIR__) . '/models/',

	/**
	 *	Views Directory
	 *
	 */
	'viewsDir'				=> dirname(__DIR__) . '/views/',

	/**
	 * Cache Directory
	 *
	 */
	'cacheDir'				=> dirname(__DIR__) . '/cache/'
);




return $application;
