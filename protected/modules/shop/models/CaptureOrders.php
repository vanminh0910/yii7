<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class CaptureOrders extends CActiveRecord {

    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function tableName() {
        return 'shop_order_capture';
    }
}


// public $orderId = array(
//        'id' => '',
//    );
//    public $products = array(
//        array('name' => '',
//            'price' => '',
//            'amount' => '',
//            'tax_name' => '',
//            'tax_price' => '',
//            'variations' => array( 
//                array(
//                    'spec_name' => '',
//                    'variation_name' => '',
//                    'variation_value' => '',
//                    'variation_adjust' => '',
//                    ),
//            ),
//        ),
//    );
//    public $shipping = array(
//        'method' => '',
//        'price' => '',
//        'tax_name' => '',
//        'tax_price' => '',
//    );
//    
//     public $payment = array(
//        'method' => '',
//        'tax_name' => '',
//        'tax_price' => '',
//    );