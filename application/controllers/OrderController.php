<?php

namespace application\controllers;

use application\core\Controller;
use application\models\Customer;
use application\models\Customer_address;
use application\models\Order;
use application\models\Order_detail;

class OrderController extends Controller
{

    protected $customer;

    protected $customer_address;
    
    protected $order;

    protected $order_detail;

    public function __construct($route)
    {
        parent::__construct($route);

        $this->customer = new Customer;

        $this->customer_address = new Customer_address;

        $this->order = new Order;

        $this->order_detail = new Order_detail;
        
    }
	public function indexAction()
	{
		
	}
	public function storeAction()
	{

        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $input = [
                "HoTenKH"               => $this->request->post("HoTenKH"),
                "SoDienThoai"           => $this->request->post("SoDienThoai"),
                "Email"                 => $this->request->post("Email"),
                "TenCongTy"             => $this->request->post("TenCongTy"),
                
            ];


            
            $address = $this->request->post("DiaChi");

            $customer = $this->customer->firstWhere('SoDienThoai', $input['SoDienThoai']);

            if($customer == null)
            {
                $customerId = $this->customer->insert($input); // thêm vào database và lấy ra id
                
                $customer = $this->customer->find($customerId);
            }
            $this->addAddress($customer, $address);
            

            $orderData  = [
                "MSKH" => $customer->MSKH,
            ];

            $orderDataID = $this->order->insert($orderData);



            foreach($_SESSION['GioHangTemp'] as $cart)
            {
                $orderDetailData = [
                    "SoDonDH" => $orderDataID,
                    "MSHH" => $cart['MSHH'],
                    "GiaDatHang" => $cart['product']->Gia,
                    "SoLuong" => $cart["SoLuong"]
                ];
                $this->order_detail->insert($orderDetailData);
            }

           unset($_SESSION['GioHangTemp']);
           $this->view->redirect('/order/success');
        }
	}

    public function addAddress($customer, $address)
    {
        $input = [
            "DiaChi" => $address,
            "MSKH" => $customer->MSKH,
        ];
        $this->customer_address->insert($input);
    }


}
