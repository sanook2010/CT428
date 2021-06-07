<?php

namespace application\controllers;

use application\core\Controller;
use application\models\Order;

class AdminOrderController extends Controller
{
    protected $order;
    public function __construct($route)
    {
        parent::__construct($route);
        $this->view->layout = 'admin';

        $this->order = new Order;
    }
    public function indexAction()
    {
        $orders = $this->order->getOrder();
        $data = [
            'orders' => $orders
        ];
        // debug($orders);
        $this->view->render('admin/order/index', 'Quản lý đơn hàng', $data);
    }
    public function createAction()
    {

    }
    public function storeAction()
    {
       
    }
    public function editAction()
    {
        $order_user = $this->order->getUserById($this->route['id']);
        $order_products = $this->order->getAllProductsById($this->route['id']);
        $data = [
            'order_user' => $order_user,
            'order_products' => $order_products
        ];
        $this->view->render('admin/order/edit', 'Quản lý đơn hàng', $data);  
    }
    public function updateAction()
    {
        $input = [
            "MSNV" => $_SESSION['admin']['id'],
            "NgayGH" => date('Y-m-d H:i:s')
        ];

        $this->order->update($input, $this->route['id']);
        $_SESSION['message'] = "Sửa cập nhật đơn hàng #{$this->route['id']}";
        $this->view->redirect('/admin/orders');
    }

    public function destroyAction()
    {
       
    }
}
