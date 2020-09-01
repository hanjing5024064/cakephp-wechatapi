<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\WechatGzh[]|\Cake\Collection\CollectionInterface $wechatGzhs
 */
?>
<div class="wechatGzhs index content">
    <?= $this->Html->link(__('New Wechat Gzh'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Wechat Gzhs') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('appid') ?></th>
                    <th><?= $this->Paginator->sort('secret') ?></th>
                    <th><?= $this->Paginator->sort('token') ?></th>
                    <th><?= $this->Paginator->sort('oauth_scopes') ?></th>
                    <th><?= $this->Paginator->sort('oauth_callback') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($wechatGzhs as $wechatGzh): ?>
                <tr>
                    <td><?= $this->Number->format($wechatGzh->id) ?></td>
                    <td><?= h($wechatGzh->name) ?></td>
                    <td><?= h($wechatGzh->appid) ?></td>
                    <td><?= h($wechatGzh->secret) ?></td>
                    <td><?= h($wechatGzh->token) ?></td>
                    <td><?= h($wechatGzh->oauth_scopes) ?></td>
                    <td><?= h($wechatGzh->oauth_callback) ?></td>
                    <td><?= h($wechatGzh->created) ?></td>
                    <td><?= h($wechatGzh->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $wechatGzh->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $wechatGzh->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $wechatGzh->id], ['confirm' => __('Are you sure you want to delete # {0}?', $wechatGzh->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
