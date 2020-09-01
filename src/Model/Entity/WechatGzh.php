<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * WechatGzh Entity
 *
 * @property int $id
 * @property string $name
 * @property string $appid
 * @property string $secret
 * @property string $token
 * @property string|null $oauth_scopes
 * @property string|null $oauth_callback
 * @property string|null $payment
 * @property string|null $menu
 * @property string|null $template
 * @property string|null $subscribemsg
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\UserWechatOpenid[] $user_wechat_openids
 */
class WechatGzh extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'appid' => true,
        'secret' => true,
        'token' => true,
        'oauth_scopes' => true,
        'oauth_callback' => true,
        'payment' => true,
        'menu' => true,
        'template' => true,
        'subscribemsg' => true,
        'created' => true,
        'modified' => true,
        'user_wechat_openids' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'token',
    ];
}
