<div class="row jumbotron">
    <div class="col-1"></div>
    <div class="col-10 text-center">
        <div class="card">
            <img class="card-img-top" src="<?php echo $this->Url->build('/img/cases/dsf.png');?>" style="margin: 5px;" alt="灯师傅logo">
            <div class="card-body">
                <h5 class="card-title">灯饰后市场首席服务商</h5>
                <p class="card-text">深圳市灯师傅互联网技术有限公司是一家以“共享经济模式”为发展理念的创新型互联网公司，
                    灯师傅平台致力于为全国灯饰用户提供上门安装、清洗、保养、维修及翻新等服务，联合厂家、经销商、设计师、专业师傅、用户打造高效、共赢的灯饰后市场生态系统，
                    公司目前已在深圳前海股权交易中心挂牌，企业代码：364294。</p>
                <!--        <div class="text-center"><a href="http://www.dengshifu.me/">官网</a></div>-->
                <div class="text-center">服务公众号</div>
                <img class="img-thumbnail" src="<?php echo $this->Url->build('/img/cases/dsf_qrcode.jpg'); ?>"
                     alt="灯师傅公众号二维码">
            </div>
        </div>
        <div class="col-1"></div>
    </div>
</div>
<?php
if (isset($js)) echo $this->element('wx_jssdk', ['title' => '案例:灯饰行业-福瑞来', 'description' => '深圳市灯师傅互联网技术有限公司是一家以“共享经济模式”为发展理念的创新型互联网公司， 灯师傅平台致力于为全国灯饰用户提供上门安装、清洗、保养、维修及翻新等服务.', 'link' => 'Pages/kitPublish?hwId=4', 'imgUrl' => 'img/logo.png']);
//var_dump($js);
?>
<?= $this->element('wx_share', [
    'shareTitle' => '案例:灯饰行业-福瑞来',
    'shareDesc' => '获客宣传途径',
    'shareLink' => 'http://wx.jyfrl.com/MyCases/dsf?gzhID=' . $gzhID,
    'shareImg' => 'http://wx.jyfrl.com/img/cases/dsf.png'
]) ?>
