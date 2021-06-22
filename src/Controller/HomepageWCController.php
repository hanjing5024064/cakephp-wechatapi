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
    /**
     * 微信服务处理
     */
    public function index(){
        $this->viewBuilder()->disableAutoLayout();
        $this->MyWechat->index();
    }

    /**
     * 回调
     */
    public function oauthCallback(){
        $targetUrl = $this->MyWechat->oauthCallback();
        header('location:'. $targetUrl); // 跳转到 user/profile
        exit();
    }

    /**
     * 设置微信菜单
     */
    public function setMenu(){
        $this->MyWechat->setMenu();
    }
}
