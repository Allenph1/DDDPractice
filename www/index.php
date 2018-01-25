<?php declare(strict_types = 1);

	require_once("../vendor/autoload.php");

	use Symfony\Component\Routing\Matcher\UrlMatcher;
	use Symfony\Component\Routing\RequestContext;
	use Symfony\Component\Routing\RouteCollection;
	use Symfony\Component\Routing\Route;
	use Symfony\Component\HttpFoundation\Request;
	use Symfony\Component\HttpFoundation\Response;

	$routes = new RouteCollection();

	$routes->add('getUsers', new Route('/post', array(
		'controller' => ['HTTP\Controller\User\UserController', 'getAll']
	)));

	$context = new RequestContext();
	$request = Request::createFromGlobals();
	$context->fromRequest($request);
	$matcher = new UrlMatcher($routes, $context);
	$attributes = $matcher->match($request->getPathInfo());

	try {
		$controllerClass = $attributes['controller'][0];
		$controller = new $controllerClass;
		$method = $attributes['controller'][1];
		$controller->$method($request);
	  $response = new Response(json_encode($attributes));
	} catch (Routing\Exception\ResourceNotFoundException $e) {
    $response = new Response('Not Found', 404);
	} catch (Exception $e) {
    $response = new Response('An error occurred', 500);
	}

	$response->send();
