<?php
/**
 * 展示应用案例
 */
namespace App\Controller;

use App\Controller\AppController;

/**
 * Actions Controller
 * beizhu
 * @property \App\Model\Table\ActionsTable $Actions
 */
class MyCasesController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();
//        $this->Auth->allow();
        $this->viewBuilder()->setLayout('mobile_bootstrap');
    }

    //少儿编程案列介绍
    public function kitPublish(){
        $this->set('pageTitle', '教育行业');
    }

    public function dsf()
    {
        $this->set('pageTitle', '灯饰行业');
    }

    public function hmt()
    {
        $this->set('pageTitle', '装修行业');
    }
}
