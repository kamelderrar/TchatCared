<?php 

define('DS',  DIRECTORY_SEPARATOR);
define('PUBLIC_PATH', __DIR__);
define('APPLICATION_PATH', dirname(__DIR__) . DS . 'application' );
define('CONTROLLER_PATH', APPLICATION_PATH . DS . 'controllers');
define('MODEL_PATH', APPLICATION_PATH . DS . 'models');
define('VIEW_PATH', APPLICATION_PATH . DS . 'views');
define('LAYOUT_PATH', APPLICATION_PATH . DS . 'layouts');
define('LIBRARY_PATH', APPLICATION_PATH . DS . 'libraries');

require_once LIBRARY_PATH . DS . 'Request.php';
require_once LIBRARY_PATH . DS . 'Response.php';
require_once LIBRARY_PATH . DS . 'Router.php';
require_once LIBRARY_PATH . DS . 'Dispatcher.php';
require_once LIBRARY_PATH . DS . 'View.php';
require_once LIBRARY_PATH . DS . 'Controller.php';
require_once LIBRARY_PATH . DS . 'Layout.php';
require_once MODEL_PATH . DS . 'Menu.php';

$request = new Request;
$response = new Response;

$router = new Router($request);
$router->route();

$dispatcher = new Dispatcher($request, $response);
$dispatcher->dispatch();

$response->send();




