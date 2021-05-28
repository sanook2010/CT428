<?php

namespace application\controllers;

use application\core\Controller;
use application\models\Message;
use application\models\Product;

class ProductController extends Controller
{
    
    private $product;

    public function __construct($route)
    {
        parent::__construct($route);
        $this->product = new Product;
        
    }

    public function indexAction()
    {
        $this->view->render('product/index','Sản phẩm');
    }
	public function showAction()
	{
		$product = $this->product->findOrFail($this->route['id']);
        $data = [
            'product' => $product
        ];
        $this->view->render('product/show', $product->TenHH, $data);
	}
    
	
}
