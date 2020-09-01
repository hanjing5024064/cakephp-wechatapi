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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $wechatGzh->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $wechatGzh->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Wechat Gzhs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="wechatGzhs form content">
            <?= $this->Form->create($wechatGzh) ?>
            <fieldset>
                <legend><?= __('Edit Wechat Gzh') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('appid');
                    echo $this->Form->control('secret');
                    echo $this->Form->control('token');
                    echo $this->Form->control('oauth_scopes');
                    echo $this->Form->control('oauth_callback');
                    echo $this->Form->control('payment');
                    echo $this->Form->control('menu');
                    echo $this->Form->control('template');
                    echo $this->Form->control('subscribemsg');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
