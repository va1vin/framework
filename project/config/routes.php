<?php
use \Core\Route;

return [
	new Route('/my-page1/', 'page', 'show1'),
	new Route('/my-page2/', 'page', 'show2'),
	new Route('/page/act', 'page', 'act'),
	new Route('/act1/', 'test', 'act1'),
	new Route('/act2/', 'test', 'act2'),
	new Route('/act3/', 'test', 'act3'),
	new Route('/nums/:n1/:n2/:n3/', 'sum', 'sum'),
	new Route('/page/:id/', 'page', 'show'),
	new Route('/user/all/', 'user', 'all'),
	new Route('/user/first/:n/', 'user', 'first'),
	new Route('/user/:id/', 'user', 'show'),
	new Route('/user/:id/:key/', 'user', 'info'),
	
];
	

