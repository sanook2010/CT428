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
       
    }
    public function updateAction()
    {
       
    }

    public function destroyAction()
    {
       
    }
}
