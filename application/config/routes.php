<?php

return [

	'' => [
		'controller' => 'main',
		'action' => 'index',
	],


	// auth
	'admin/login' => [
		'controller' => 'auth',
		'action' => 'loginIndex',
	],
	'admin/login/auth' => [
		'controller' => 'auth',
		'action' => 'login',
	],

	//
	'admin/index' => [
		'controller' => 'adminDashboard',
		'action' => 'index',
	],
	'admin' => [
		'controller' => 'adminDashboard',
		'action' => 'index',
	],

	'admin/categories' => [
		'controller' => 'adminCategory',
		'action' => 'index',
	],
	'admin/categories/create' => [
		'controller' => 'adminCategory',
		'action' => 'create',
	],
	'admin/categories/store' => [
		'controller' => 'adminCategory',
		'action' => 'store',
	],

];
