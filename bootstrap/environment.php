<?php require_once dirname(__DIR__) . '/vendor/autoload.php';

use Phalcon\DI\FactoryDefault,
	Phalcon\DI,
	Phalcon\Mvc\View\Simple as View,
	Phalcon\Mvc\Dispatcher,
	Phalcon\Mvc\Url as UrlResolver,
	Phalcon\Db\Adapter\Pdo\Mysql as DbAdapter,
	Phalcon\Mvc\View\Engine\Volt as VoltEngine,
	Phalcon\Mvc\Model\Metadata\Memory as MetaDataAdapter,
	Phalcon\Session\Adapter\Files as SessionAdapter,
	Symfony\Component\Debug\Debug;


/**
 * Load the config
 *
 */
$config = require_once __DIR__ . '/setup.php';

/**
 * Class loader
 *
 */
require_once __DIR__ . '/loader.php';

/**
 * Debugger
 *
 */
if($config->application->debug == true)
{
	Debug::enable();
}

/**
 * Create a new Factory default dependancy injector
 *
 */
$container = new FactoryDefault;
DI::reset();

/**
 * Load the routes into the container
 *
 */
$container->set('router', function()
{
	return require_once dirname(__DIR__) . '/app/routes.php';
}, true);

/**
 * Load the url resolver
 *
 */
$container->set('url', function() use ($config) 
{
	$url = new UrlResolver;
	$url->setBaseUri($config->application->baseUri);
	return $url;
}, true);

/**
 * The Views component
 *
 */
$container->set('view', function() use ($config) 
{
	$view = new View;

	$view->setViewsDir($config->application->viewsDir);

	$view->registerEngines(Array(
		'.volt'	=> function($view, $container) use ($config)
		{
			$volt = new VoltEngine($view, $container);

			$volt->setOptions(array(
				'compiledPath'		=> $config->application->cacheDir,
				'compiledSeperator'	=> '_'
			));

			return $volt;
		},
			'.phtml' => 'Phalcon\Mvc\View\Engine\Php'
		));

	return $view;
}, true);

/**
 * The database component
 *
 */
$container->set('db', function() use ($config) 
{
	return new DbAdapter(array(
		'host' => $config->database->host,
		'username' => $config->database->username,
		'password' => $config->database->password,
		'dbname' => $config->database->dbname
	));
});

/**
 * Models metadata
 *
 */
$container->set('modelsMetadata', function() use ($config) 
{
	return new MetaDataAdapter();
});

/**
 * Session
 *
 */
$container->set('session', function() 
{
	$session = new SessionAdapter;
	$session->start();
	return $session;
});

/**
 * Dispatcher
 *
 */
$container->set('dispatcher', function() 
{
	$dispatcher = new Dispatcher;
	return $dispatcher;
});

DI::setDefault($container);

return $container;
