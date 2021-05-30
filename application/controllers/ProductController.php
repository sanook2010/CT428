<?php

namespace application\controllers;

use application\core\Controller;
use application\models\Message;
use application\models\Product;
use application\models\Category;
class ProductController extends Controller
{
    
    private $product;
    private $category;

    public function __construct($route)
    {
        parent::__construct($route);
        $this->product = new Product;
        $this->category = new Category;    
    }

    public function indexAction()
    {
        
        $products = $this->product->all();
        $categories = $this->category->all();

        $data = [
            'products' => $products,
            'categories' => $categories
        ];

        $this->view->render('product/index','Sản phẩm', $data);
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
