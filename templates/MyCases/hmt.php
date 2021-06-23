<div class="card" style="background-color: rgb(75, 133, 155)">
    <img class="card-img-top" src="<?php echo $this->Url->build('/img/cases/hmt.png');?>" alt="灯师傅logo">
    <div class="card-body">
        <h5 class="card-title">专业房屋维修\装潢服务商</h5>
        <p class="card-text">管理团队从事建筑行业十几年，建造师、五大员阵容齐全，核心管理层初期在编30人； 施工队伍都具有五年以上的行业经历，木、泥瓦、油漆、水电、拆除、保洁等各种工种人员齐备，电工焊工持证上岗，专业队伍初期在编70人； 借助网络技术、专业装饰经验、现代化工器具和检测仪，走进社区服务，力争房屋维修产业化、规模化、网络化。</p>
<!--        <div class="text-center"><a href="http://www.humantang.com.cn/">官网</a></div>-->
        <div class="text-center">服务公众号</div>
        <img class="img-thumbnail" src="<?php echo $this->Url->build('/img/cases/hmt_qrcode.png');?>" alt="Card image cap">
    </div>
</div>
<?= $this->element('wx_share', [
    'shareTitle' => '案例:装修行业-福瑞来',
    'shareDesc' => '护满堂从事建筑行业十几年，建造师、五大员阵容齐全，核心管理层初期在编30人。',
    'shareLink' => 'http://wx.jyfrl.com/MyCases/hmt?gzhID=' . $gzhID,
    'shareImg' => 'http://wx.jyfrl.com/img/hmt.png'
]) ?>
