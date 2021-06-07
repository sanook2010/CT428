<?php

return [

	// home page
	'' => [
		'controller' => 'main',
		'action' => 'index',
	],


	// product
	'products/{id:\d+}' => [
		'controller' => 'product',
		'action' => 'show',
	],
	
	'products' => [
		'controller' => 'product',
		'action' => 'index',
	],

	//cart
	'cart' => [
		'controller' => 'cart',
		'action' => 'index',
	],
	
	'cart/store' => [
		'controller' => 'cart',
		'action' => 'store',
	],
	
	'order/store' => [
		'controller' => 'order',
		'action' => 'store',
	],


	// Page
	'order/success' => [
		'controller' => 'page',
		'action' => 'order',
	],

	'contact' => [
		'controller' => 'page',
		'action' => 'contact',
	],

	'about' => [
		'controller' => 'page',
		'action' => 'about',
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
		'controller' => 'adminOrder',
		'action' => 'index',
	],
	'admin' => [
		'controller' => 'adminOrder',
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

	//Staff
	'admin/products' => [
		'controller' => 'adminProduct',
		'action' => 'index',
	],
	'admin/products/create' => [
		'controller' => 'adminProduct',
		'action' => 'create',
	],
	'admin/products/store' => [
		'controller' => 'adminProduct',
		'action' => 'store',
	],
	'admin/products/edit/{id:\d+}' => [
		'controller' => 'adminProduct',
		'action' => 'edit',
	],
	'admin/products/update/{id:\d+}' => [
		'controller' => 'adminProduct',
		'action' => 'update',
	],
	'admin/products/destroy/{id:\d+}' => [
		'controller' => 'adminProduct',
		'action' => 'destroy',
	],

	//Order
	'admin/orders' => [
		'controller' => 'adminOrder',
		'action' => 'index',
	],
	'admin/orders/create' => [
		'controller' => 'adminOrder',
		'action' => 'create',
	],
	'admin/orders/store' => [
		'controller' => 'adminOrder',
		'action' => 'store',
	],
	'admin/orders/edit/{id:\d+}' => [
		'controller' => 'adminOrder',
		'action' => 'edit',
	],
	'admin/orders/update/{id:\d+}' => [
		'controller' => 'adminOrder',
		'action' => 'update',
	],
	'admin/orders/destroy/{id:\d+}' => [
		'controller' => 'adminOrder',
		'action' => 'destroy',
	],
];
