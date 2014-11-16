<?php 

$application = require_once dirname(__DIR__) . '/bootstrap/environment.php';

// Disabled auto rendering of views
$application->useImplicitView(false);

/**
 * Handle the route
 *
 */
$application->handle()->getContent();
