<!--BEGIN toast-->
<div id="toast" style="display: none;">
    <div class="weui-mask_transparent"></div>
    <div class="weui-toast">
        <i class="weui-icon-success-no-circle weui-icon_toast"></i>
        <p class="weui-toast__content" id="toastText">添加成功</p>
    </div>
</div>
<!--end toast-->

<!--begin alert-->
<div style="display: none;" id="alertDiv">
    <div class="weui-mask"></div>
    <div class="weui-dialog">
        <div class="weui-dialog__hd"><strong class="weui-dialog__title" id="alertTitle">弹窗标题</strong></div>
        <div class="weui-dialog__bd" id="alertContent">弹窗内容，告知当前页面信息等</div>
        <div class="weui-dialog__ft">
            <a href="javascript:$('#alertDiv').hide();" class="weui-dialog__btn weui-dialog__btn_primary">知道了</a>
        </div>
    </div>
</div>
<!--    end alert-->