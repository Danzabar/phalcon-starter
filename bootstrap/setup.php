<?php

use \Phalcon\Config;

/**
 * Load the configuration files
 * 
 */
$database = require_once dirname(__DIR__) . '/app/config/database.php';
$application = require_once dirname(__DIR__) . '/app/config/application.php';


return new Config(Array(
	'database' 			=> $database,
	'application'		=> $application
));
