<?php 

/**
 *  The Cli Config file,
 *
 *	Here you can set any configuration variables you need for the cli, they get included straight into the application
 */
$config = Array(

	'commands'	=> Array(
		new TestTask
	)
);


return $config;
