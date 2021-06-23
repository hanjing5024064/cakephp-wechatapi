<script src="http://res.wx.qq.com/open/js/jweixin-1.2.0.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" charset="utf-8">
    wx.config(<?php echo $jssdkConfig;?>);

    //    wx.checkJsApi({
    //        jsApiList: ['onMenuShareAppMessage'], // 需要检测的JS接口列表，所有JS接口列表见附录2,
    //        success: function(res) {
    //            alert('success');
    //        }
    //    });

    wx.ready(function() {
        wx.onMenuShareAppMessage({
            title: '<?php echo $shareTitle;?>', // 分享标题
            desc: '<?php echo $shareDesc;?>', // 分享描述
            link: '<?php echo $shareLink;?>', // 分享链接，该链接域名必须与当前企业的可信域名一致
            imgUrl: '<?php echo $shareImg;?>', // 分享图标
            type: 'link', // 分享类型,music、video或link，不填默认为link
            dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
            success: function () {
                // 用户确认分享后执行的回调函数
            },
            cancel: function () {
                // 用户取消分享后执行的回调函数
            }
        });

        wx.onMenuShareTimeline({
            title: '<?php echo $shareTitle;?>', // 分享标题
            link: '<?php echo $shareLink;?>', // 分享链接，该链接域名必须与当前企业的可信域名一致
            imgUrl: '<?php echo $shareImg;?>', // 分享图标
            success: function () {
                // 用户确认分享后执行的回调函数
            },
            cancel: function () {
                // 用户取消分享后执行的回调函数
            }
        });
    });
</script>
