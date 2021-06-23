<?php
namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Core\Configure;
use Composer\Config;

class MyUtilComponent extends Component
{
    /**
     * 是否微信浏览器访问
     * @return bool
     */
    public function isWeChat()
    {
        //判断是否微信访问
        if (strpos($_SERVER['HTTP_USER_AGENT'], 'MicroMessenger') !== false) {
            return true;
        } else return false;
    }

    /**
     * 简单判断是否是移动端访问
     */
    public function isMobile()
    {
        $mobile = false;
        if (stripos(env('HTTP_USER_AGENT'), 'iphone') !== false ||
            stripos(env('HTTP_USER_AGENT'), 'android') !== false
        ) {

            $mobile = true;
        }
        return $mobile;
    }

    /**
     * 计算中文字符长度
     * 中国,你好 = 5
     * hello,中国 = 8
     */
    public function utf8_strlen($string = null)
    {
        // 将字符串分解为单元
        preg_match_all("/./us", $string, $match);
        // 返回单元个数
        return count($match[0]);
    }

    /**
     * 数组的key组合程字符串
     */
    public function getIdArray($array){

        $string = [];

        if($array && is_array($array)){

            foreach ($array as $key=> $value){
                $string[] = $value['id'];
            }
        }

        return $string;
    }
}