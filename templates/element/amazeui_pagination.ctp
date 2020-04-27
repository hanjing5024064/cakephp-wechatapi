<ul class="am-pagination">
    <?= $this->Paginator->setTemplates([
        'nextActive' => '<li><a rel="next" href="{{url}}">{{text}}</a></li>',
        'nextDisabled' => '<li class="m-disabled"><a href="" onclick="return false;">{{text}}</a></li>',
        'prevActive' => '<li><a rel="prev" href="{{url}}">{{text}}</a></li>',
        'prevDisabled' => '<li class="m-disabled"><a href="" onclick="return false;">{{text}}</a></li>',
        'first' => '<li><a href="{{url}}">{{text}}</a></li>',
        'prev' => '<li><a href="{{url}}">{{text}}</a></li>',
        'numbers' => '<li><a href="{{url}}">{{text}}</a></li>',
        'next' => '<li><a href="{{url}}">{{text}}</a></li>',
        'last' => '<li><a href="{{url}}">{{text}}</a></li>',
        'current' => '<li class="am-active"><a href="{{url}}">{{text}}</a></li>',
        ])?>
    <?= $this->Paginator->first('<< ' . __('首页')) ?>
    <?= $this->Paginator->last(__('尾页') . ' >>') ?><br>
    <?= $this->Paginator->prev('< ' . __('上一页')) ?>
    <?= $this->Paginator->next(__('下一页') . ' >') ?><br>
    <?= $this->Paginator->numbers() ?><br>
</ul>