<?php

namespace application\controllers;

use application\core\Controller;
use application\models\Product;

class PageController extends Controller
{

	public function orderAction()
	{
		return $this->view->render('page/order', 'Đặt hành thành công');
	}
	
}
