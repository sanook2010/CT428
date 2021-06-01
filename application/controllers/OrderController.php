<?php

namespace application\controllers;

use application\core\Controller;
use application\models\Customer;
use application\models\Customer_address;

class OrderController extends Controller
{

    protected $customer;

    protected $customer_address;

    public function __construct($route)
    {
        parent::__construct($route);

        $this->customer = new Customer;

        $this->customer_address = new Customer_address;
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
                "TenCongTy"             => $this->request->post("TenCongTy"),
                "Email"                 => $this->request->post("Email")
            ];
            $address = $this->request->post("DiaChi");

            $customer = $this->customer->firstWhere('SoDienThoai', $input['SoDienThoai']);

            if($customer == null)
            {
                $customer = $this->customer->insert($input);
            }

            $this->addAddress($customer, $address);
           
            $_SESSION['message'] = 'Đặt hàng thành công chúng tôi sớm liên hệ với bạn';

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
