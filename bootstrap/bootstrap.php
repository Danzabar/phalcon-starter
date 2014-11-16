<?php

use Phalcon\Mvc\Application;

/**
 * 	This file deals with the creation of the Application class,
 *	It allows seperation so we can inject the application inside tests as
 *	well as using it for its usual purpose.
 *
 */
$container = require_once __DIR__ . '/environment.php';


$application = new Application($container);

// Use explicit views
$application->useImplicitView(false);


return $application;
