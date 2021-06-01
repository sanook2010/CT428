<?php

namespace application\controllers;

use application\core\Controller;
use application\models\Product;

class MainController extends Controller
{

	public function indexAction()
	{
		$products = (new Product)->all();
		// var_dump($message);
		$var = [
			'products' => $products
		];
		$this->view->render('main/index', 'Home page', $var);
	}
	public function storeAction()
	{
		
	}
}
