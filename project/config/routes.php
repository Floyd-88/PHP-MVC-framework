<?php
	use \Core\Route;
	
	return [
		new Route('/page/act', 'page', 'act'),
		new Route('/page/show/:id/', 'page', 'show'),
		// new Route('/my-page2/', 'page', 'show2'),
		new Route('/act1/', 'test', 'act1'),
		new Route('/act2/', 'test', 'act2'),
		new Route('/act3/', 'test', 'act3'), 
		new Route('/nums/:n1/:n2/:n3/', 'num', 'sum'),
		new Route('/user/:id/', 'user', 'show'),
		new Route('/user/:id/:key/', 'user', 'info'),
		new Route('/user-all/', 'user', 'all'),
		new Route('/user-first/:n/', 'user', 'first'),
		new Route('/product/all/', 'product', 'all'),
		new Route('/product/:n/', 'product', 'show'),
		new Route('/price/:id', 'price', 'modelPrice'),
		new Route('/price/all/:from/:to', 'price', 'modelPriceAll'),
		new Route('/productshop/:id', 'productshop', 'one'),
		new Route('/productshop', 'productshop', 'all'),
	];
	
