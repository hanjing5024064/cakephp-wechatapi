<div data-am-widget="navbar" class="am-navbar am-cf am-navbar-default "
     id="">
    <ul class="am-navbar-nav am-cf am-avg-sm-4">
        <li>
            <a href="<?= $this->Url->build('/MobileView/index'); ?>" class="">
                <span class="am-icon-home"></span>
                <span class="am-navbar-label">首页</span>
            </a>
        </li>
        <li>
            <a href="<?= $this->Url->build('/dailyReport/addm'); ?>" class="">
                <span class="am-icon-edit"></span>
                <span class="am-navbar-label">日报</span>
            </a>
        </li>
        <li>
            <a href="###" class="">
                <span class="am-icon-list-ul"></span>
                <span class="am-navbar-label">待办</span>
            </a>
        </li>
        <li>
            <a href="<?= $this->Url->build('/MobileView/myInfo'); ?>" class="">
                <span class="am-icon-user"></span>
                <span class="am-navbar-label">我的</span>
            </a>
        </li>
    </ul>
</div>