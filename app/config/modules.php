<?php

// The vendor directory
define('VENDOR',		dirname(dirname(__DIR__)) . '/vendor/');

// define the base directory for modules to use.
define('BASE', 			dirname(__DIR__));

/**
 * Modules,
 * 
 * Defining a module and its path here will load it into the application. 
 *
 * There is a test module for reference, things you should know, 
 * Dont include the Module.php on path, as it gets auto included.
 * If you are planning on using mosule routes, then you will 
 * need to put them as a group in your mod directory /Config/Routes.php
 *
 */
Return Array(

	// This is an example module.
	'test'	=> Array(
		'className'		=> 'Test/Module',
		'path'			=> '/path/to/mod_directory', // Dont include the module.php here.
		'use_routes'	=> TRUE  // This will inject routes from module/Config/Routes.php as groups.
	)

);

