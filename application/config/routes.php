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

	//Category
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
	'admin/categories/edit/{id:\d+}' => [
		'controller' => 'adminCategory',
		'action' => 'edit',
	],
	'admin/categories/update/{id:\d+}' => [
		'controller' => 'adminCategory',
		'action' => 'update',
	],
	'admin/categories/destroy/{id:\d+}' => [
		'controller' => 'adminCategory',
		'action' => 'destroy',
	],


	//Staff
	'admin/staffs' => [
		'controller' => 'adminStaff',
		'action' => 'index',
	],
	'admin/staffs/create' => [
		'controller' => 'adminStaff',
		'action' => 'create',
	],
	'admin/staffs/store' => [
		'controller' => 'adminStaff',
		'action' => 'store',
	],
	'admin/staffs/edit/{id:\d+}' => [
		'controller' => 'adminStaff',
		'action' => 'edit',
	],
	'admin/staffs/update/{id:\d+}' => [
		'controller' => 'adminStaff',
		'action' => 'update',
	],
	'admin/staffs/destroy/{id:\d+}' => [
		'controller' => 'adminStaff',
		'action' => 'destroy',
	],
];
