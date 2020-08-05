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

    public function dsf()
    {

    }

    public function hmt()
    {

    }
}
