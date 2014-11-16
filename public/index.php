<?php 

$application = require_once dirname(__DIR__) . '/bootstrap/environment.php';

/**
 * Handle the route
 *
 */
$application->handle()->getContent();
