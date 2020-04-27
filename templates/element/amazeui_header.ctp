<!--
    <div class="am-header-left am-header-nav">
        <a href=<?= $this->Url->build('/'); ?> class="">

            <i class="am-header-icon am-icon-home"></i>
        </a>
    </div>
    -->

<h1 class="am-header-title">
    <a href=<?= $this->Url->build('/'); ?> class="">
        <?php
        echo isset($title) ? $title : '三色';
        ?>
    </a>
</h1>

<nav data-am-widget="menu" class="am-menu  am-menu-dropdown1"
     data-am-menu-collapse
>
    <a href="javascript: void(0)" class="am-menu-toggle">
        <i class="am-menu-toggle-icon am-icon-bars"></i>
    </a>

    <ul class="am-menu-nav am-avg-sm-1 am-collapse">
        <li class="">
            <a href="<?= $this->Url->build('/dailyReport/addm'); ?>" class="">新增日报</a>
        </li>
        <li class="">
            <a href="<?= $this->Url->build('/users/logout'); ?>" class="">退出</a>
        </li>
        <!--            <li class="">-->
        <!--                <a href="##" class="" >项目</a>-->
        <!--            </li>-->
        <!--            <li class="">-->
        <!--                <a href="##" class="" >绩效</a>-->
        <!--            </li>-->
        <!--            <li class="am-parent">-->
        <!--                <a href="##" class="" >其他</a>-->
        <!--                <ul class="am-menu-sub am-collapse  am-avg-sm-2 ">-->
        <!--                    <li class="">-->
        <!--                        <a href="##" class="" >建设中</a>-->
        <!--                    </li>-->
        <!--                    <li class="">-->
        <!--                        <a href="##" class="" >建设中</a>-->
        <!--                    </li>-->
        <!--                    <li class="">-->
        <!--                        <a href="##" class="" >建设中</a>-->
        <!--                    </li>-->
        <!--                    <li class="">-->
        <!--                        <a href="##" class="" >建设中</a>-->
        <!--                    </li>-->
        <!--                    <li class="am-menu-nav-channel"><a href="##" class="" title="公司">进入栏目 &raquo;</a></li>-->
        <!--                </ul>-->
        <!--            </li>-->
    </ul>

</nav>