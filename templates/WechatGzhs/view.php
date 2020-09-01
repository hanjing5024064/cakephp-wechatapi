<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\WechatGzh $wechatGzh
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Wechat Gzh'), ['action' => 'edit', $wechatGzh->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Wechat Gzh'), ['action' => 'delete', $wechatGzh->id], ['confirm' => __('Are you sure you want to delete # {0}?', $wechatGzh->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Wechat Gzhs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Wechat Gzh'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="wechatGzhs view content">
            <h3><?= h($wechatGzh->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($wechatGzh->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Appid') ?></th>
                    <td><?= h($wechatGzh->appid) ?></td>
                </tr>
                <tr>
                    <th><?= __('Secret') ?></th>
                    <td><?= h($wechatGzh->secret) ?></td>
                </tr>
                <tr>
                    <th><?= __('Token') ?></th>
                    <td><?= h($wechatGzh->token) ?></td>
                </tr>
                <tr>
                    <th><?= __('Oauth Scopes') ?></th>
                    <td><?= h($wechatGzh->oauth_scopes) ?></td>
                </tr>
                <tr>
                    <th><?= __('Oauth Callback') ?></th>
                    <td><?= h($wechatGzh->oauth_callback) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($wechatGzh->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($wechatGzh->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($wechatGzh->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Payment') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($wechatGzh->payment)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Menu') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($wechatGzh->menu)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Template') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($wechatGzh->template)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Subscribemsg') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($wechatGzh->subscribemsg)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related User Wechat Openids') ?></h4>
                <?php if (!empty($wechatGzh->user_wechat_openids)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Wechat Id') ?></th>
                            <th><?= __('Wechat Gzh Id') ?></th>
                            <th><?= __('Openid') ?></th>
                            <th><?= __('Uuid') ?></th>
                            <th><?= __('Status') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($wechatGzh->user_wechat_openids as $userWechatOpenids) : ?>
                        <tr>
                            <td><?= h($userWechatOpenids->id) ?></td>
                            <td><?= h($userWechatOpenids->user_wechat_id) ?></td>
                            <td><?= h($userWechatOpenids->wechat_gzh_id) ?></td>
                            <td><?= h($userWechatOpenids->openid) ?></td>
                            <td><?= h($userWechatOpenids->uuid) ?></td>
                            <td><?= h($userWechatOpenids->status) ?></td>
                            <td><?= h($userWechatOpenids->created) ?></td>
                            <td><?= h($userWechatOpenids->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'UserWechatOpenids', 'action' => 'view', $userWechatOpenids->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'UserWechatOpenids', 'action' => 'edit', $userWechatOpenids->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'UserWechatOpenids', 'action' => 'delete', $userWechatOpenids->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userWechatOpenids->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
