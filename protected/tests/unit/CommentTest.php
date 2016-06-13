<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class CommentTest extends DBTestCase {

    public function setUp() {
        parent::setUp();
        $this->user = new User();
    }

    public function tearDown() {
        unset($this->user);
    }

    protected function getDataSet() {
        parent::getDataSet();
    }

    public function testApprove() {
//        $this->user->validate();
//        print_r($this->user->errors['username'][0]);
        //$this->assertTrue(Yii::app()->getModule('Accounts')->rememberMeTime==2592000);
        $this->assertEquals(1 + 1, 2);
    }

}
