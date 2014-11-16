<?php 

$application = require_once dirname(__DIR__) . '/bootstrap/bootstrap.php';

/**
 * Handle the route
 *
 */
echo $application->handle()->getContent();
