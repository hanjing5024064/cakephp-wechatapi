<?php

namespace App\Controller\Component;

use Cake\Controller\Component;
use EasyWeChat\Factory;

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
        $this->controller = $this->_registry->getController();

        //设置公众号ID
        $this->gzhID = $this->getConfig('gzhID');

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
//        $server->setMessageHandler(function ($message) {
//            $nowUserOpenid = $message->FromUserName;
//            $userSer = $this->application->user;
//            $this->nowUser = $userSer->get($nowUserOpenid);
//
//            // 注意，这里的 $message 不仅仅是用户发来的消息，也可能是事件
//            // 当 $message->MsgType 为 event 时为事件
//            if ($message->MsgType == 'event') {
//                switch ($message->Event) {
//                    case 'subscribe'://用户关注
//                        return $this->getSubscribeMsg($this->getNickname($this->nowUser));
//                        break;
//                    case 'unsubscribe'://用户取消关注
//                        return $this->unsubscribeMsg($message->FromUserName);
//                        break;
//                    case 'CLICK'://点击事件
//                        return 'key: ' . $message->EventKey;
//                        break;
//                    default:
//                        break;
//                }
//            }
//        });
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

        if ($this->gzhID) {
            $this->wxConfig = [
                'debug' => true,
//            'app_id' => 'wx5698c52e2fdd9ce0',
//            'secret' => '99d107454b2482ff70ff183fbfa70e67',
//            'token'  => 'cisleIKf34kjvlL',
                // 'aes_key' => null, // 可选
//        'log' => [
//            'level' => 'debug',
//            'file'  => '/tmp/easywechat.log', // XXX: 绝对路径！！！！
//        ],
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
}
