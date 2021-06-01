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
	public function aboutAction()
    {
        return $this->view->render('page/about', 'Về chúng tôi');
    }

    public function contactAction()
    {
        return $this->view->render('page/contact', 'Về chúng tôi');
    }
}
