<?php

namespace application\controllers;

use application\core\Controller;
use application\models\Product;
use application\models\Cart;
class CartController extends Controller
{

	private $product;
	private $cart;

	public function __construct($route)
	{
		parent::__construct($route);
		$this->product = new Product;
	}
	public function indexAction()
	{



		$data = [
			'products' => $this->getCart(),
			'totalPrice' => $this->getTotalPrice()
		];

		
		$this->view->render('cart/index', 'Giỏ hàng', $data);
	}

	public function storeAction()
	{
		$product =  $this->product->findOrFail($this->request->post("MSHH"));

		if($this->cartIsEmpty())
		{
			$_SESSION['GioHangTemp'] = [];
		}

		$this->addCart($product);

		return $this->view->redirect('/cart');

	}




	private function productAlreadyInCart($product)
	{
		if($this->cartIsEmpty())
		{
			return false;
		}

		foreach($this->getCart() as $tempData)
		{
			if($tempData['MSHH'] == $product->MSHH)
			{
				return true;
			}
		}
		return false;
	
	}

	private function cartIsEmpty()
	{
		return empty($_SESSION['GioHangTemp']);
	}

	private function getCart()
	{
		if(!$this->cartIsEmpty())
		{
			return $_SESSION['GioHangTemp'];
		}
	}

	private function addCart($product)
	{
		if($this->productAlreadyInCart($product))
		{
			$this->increaseProductInCart($product);
		}

		else
		{
			$tempData = [
				'SoLuong' => 1,
				'MSHH' => $product->MSHH,
				'product' => $product
			];
			array_push($_SESSION['GioHangTemp'], $tempData);
		}
		
	}

	private function increaseProductInCart($product)
	{
		foreach($this->getCart() as $key => $tempData)
		{
			if($tempData['MSHH'] == $product->MSHH)
			{
				$_SESSION['GioHangTemp'][$key]['SoLuong']++;
			}
		}
	}
	
	private function getTotalPrice()
	{
		if(!$this->cartIsEmpty()){
			$price = 0;
			foreach($this->getCart() as $key => $tempData)
			{
				$price += ($this->getCart()[$key]['product']->Gia * $this->getCart()[$key]['SoLuong']);
			}
			return $price;
		}
	}

	private function destroyCart()
	{
		unset($_SESSION['GioHangTemp']);
	}
}
