<?php


class Yli_H5_CustomerController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
      echo 'abcdefg';
    }

    public function viewAction()
    {
      echo '9876543';
    }

    public function loginAction()
    {
      //echo 'ert';
      $customerInfo = array(
          'username' => 'alex1234',
          'customer_id' => 1,
          'email' => 'alex1234@qq.com',
          'token' => 'hkdfh375jsdfhjsdjhii213432',
      );
      echo json_encode($customerInfo);
    }
}
