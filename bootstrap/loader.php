<?php

use Phalcon\Loader;

$loader = new Loader();

$loader->registerDirs(
	array (
		$config->application->controllerDir,
		$config->application->modelsDir	
	)
);

$loader->register();
