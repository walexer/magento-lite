<?php


class Yli_H5_AccountController extends Mage_Core_Controller_Front_Action
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
      $code = 0;
      $msg = '获取成功';
      $data = array();
      //echo 'ert';
      $customerInfo = array(
          'username' => 'alex1234',
          'customer_id' => 1,
          'email' => 'alex1234@qq.com',
          'token' => 'hkdfh375jsdfhjsdjhii213432',
      );
      $result = array(
          'code' => $code,
          'msg' => $msg,
          'data' => empty($customerInfo) ? (object)array() : $customerInfo
      );
      echo json_encode($result);
    }
}
