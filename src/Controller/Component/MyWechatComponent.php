<?php

namespace App\Controller\Component;

use Cake\Controller\Component;
use EasyWeChat\Factory;

/**
 * 微信交互组件
 * Class MyWechatComponent
 * @package App\Controller\Component
 */
class MyWechatComponent extends Component
{
    private $controller;

    private $wxConfig;
    private $wxButtons;

    private $application;

    //当前微信用户
    private $nowUser;

    //当前公众号ID
    private $gzhID;

    public function initialize(array $config): void
    {
        parent::initialize($config);
        $this->controller = $this->getController();

        //初始化微信配置参数
        if ($this->initConfig()) {
            //设置微信操作对象
            $this->application = Factory::officialAccount($this->wxConfig);
        }
    }

    //微信服务处理
    public function index()
    {
        $server = $this->application->server;
        $user = $this->application->user;
        $server->push(function ($message) {
            switch ($message['MsgType']) {
                case 'event':
                    return '收到事件消息';
                    break;
                case 'text':
                    return $this->dealTextMsg($message);
                    break;
                case 'image':
                    return '收到图片消息';
                    break;
                case 'voice':
                    return '收到语音消息';
                    break;
                case 'video':
                    return '收到视频消息';
                    break;
                case 'location':
                    return '收到坐标消息';
                    break;
                case 'link':
                    return '收到链接消息';
                    break;
                case 'file':
                    return '收到文件消息';
                // ... 其它消息
                default:
                    return '收到其它消息';
                    break;
            }
        });
        $response = $server->serve();
        $response->send();
    }

    /////////////////////////////////////////////////////

    /**
     * 初始化微信配置参数
     * @return bool
     */
    private function initConfig()
    {
        $this->gzhID = $this->getConfig('gzhID');

        if ($this->gzhID) {
            $this->wxConfig = [
                'debug' => true,
                'oauth' => [
                    'scopes' => ['snsapi_base'],
                    'callback' => $this->wxUrl . '/wc/oauth_callback?gzhID=' . $this->WechatGzhId,
                ],
                'payment' => [
                    'merchant_id' => '1417865802',
                    'key' => 'df34gi9045gj90g45U094pw3423paJKe',
                    'cert_path' => '../config/apiclient_cert.pem', // XXX: 绝对路径！！！！
                    'key_path' => '../config/apiclient_key.pem',      // XXX: 绝对路径！！！！
                    'notify_url' => 'http://gzh-hwwl.shhwxx.com.cn/Car/index?hwId=5',       // 你也可以在下单时单独设置来想覆盖它
                ],
            ];

            $this->controller->loadModel('WechatGzhs');
            $wechatGzh = $this->controller->WechatGzhs->get($this->gzhID);
            if ($wechatGzh) {
                $this->wxConfig['app_id'] = $wechatGzh->appid;
                $this->wxConfig['secret'] = $wechatGzh->secret;
                $this->wxConfig['token'] = $wechatGzh->token;
                $this->subscribeMsg = $wechatGzh->subscribemsg;
                return true;
            }
        }

        return false;
    }

    /**
     * 处理用户发来的文本信息
     * @param $message
     * @return News|string
     */
    public function dealTextMsg($message){
        switch ($message['Content']) {
            case 'info':
                return $message['FromUserName'];
                break;
            default:
                return 'I  cant understand you.';
                break;
        }
    }

    /**
     * 获取欢迎消息
     * @param $nickname
     * @return string
     */
    private function getSubscribeMsg($nickname)
    {
        $msg = '';
        if ($nickname) {
            $msg .= '欢迎您，' . $nickname . "！\n";
        }
        $subscribeMsg = $this->subscribeMsg;
        $subscribeMsg = str_replace('<br>', "\n", $subscribeMsg);
        $msg .= $subscribeMsg;

        return $msg;
    }

    /**
     * 获取用户昵称
     * @param string $nowUser
     * @return string
     */
    private function getNickname($nowUser = '')
    {
        $nickname = '未设置';
        if ($nowUser) {
            $nickname = $nowUser->nickname;
        }
        return $nickname;
    }

    /**
     * 获取公众号ID
     */
    private function getWechatGzhID()
    {
        return $this->gzhID;
    }

    /**
     * 获取jssdkconfig数组
     * @return mixed
     */
    public function getJsSDKConfig()
    {
        $APIs = [
            'onMenuShareAppMessage', //发送给朋友
            'onMenuShareTimeline',   //分享到朋友圈
            'onMenuShareQQ',         //发送给qq好友
            'onMenuShareWeibo',      //分享到微博
            'onMenuShareQZone'       //分享到qq空间
        ];
        $jssdkConfig = $this->application->jssdk->buildConfig($APIs, false);

        return $jssdkConfig;
    }

    //设置菜单
    public function setMenu()
    {
        $app = $this->application;
        $menu = $app->menu;

        $result = $menu->create($this->getButtonsV2());
        var_dump($result);
        echo($this->gzhID);
        exit();
    }
    //获得自定义菜单数据
    public function getButtonsV2()
    {
        $this->controller->loadModel('WechatGzhs');
        $wechatGzh = $this->controller->WechatGzhs->get($this->gzhID);
        $this->wxButtons = json_decode($wechatGzh->menu, true);
        return $this->wxButtons;
    }
}
