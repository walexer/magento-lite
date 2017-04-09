<?php


class Yli_H5_CategoryController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
      echo 'abcdefg';
    }

    public function viewAction()
    {
      //echo '987654';
      $code = 0;
      $msg = '获取失败';
      $data = array();
      $category = Mage::getModel('catalog/category')->load(3);
      if ($category->getId()) {
        $code = 1;
        $msg = '获取成功';
        $data = $category->getData();
      }
      $result = array(
          'code' => $code,
          'msg' => $msg,
          'data' => empty($data) ? (object)array() : $data
      );
      echo Mage::helper('core')->jsonEncode($result);
    }
}
