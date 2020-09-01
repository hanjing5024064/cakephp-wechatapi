<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * OrganizationStructures Controller
 *
 * @property \App\Model\Table\OrganizationStructuresTable $OrganizationStructures
 */
class HomepageWCController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();
        $this->loadComponent('MyWechat', [
            'gzhID' => $this->request->getQuery('gzhID')
        ]);
    }

    /**
     * 微信服务处理
     */
    public function index(){
        $this->viewBuilder()->setLayout(null);
        var_dump($this->MyWechat->index());;
        exit();
    }

    /**
     * 回调
     */
    public function oauthCallback(){
        $targetUrl = $this->MyWechat->oauthCallback();
        header('location:'. $targetUrl); // 跳转到 user/profile
        exit();
    }
}
