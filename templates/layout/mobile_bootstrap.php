<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <?= $this->Html->css('bootstrap.min.css');?>
    <?= $this->Html->css('kit/kit.css');?>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<!--    <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>-->
    <script src="http://libs.baidu.com/jquery/1.11.3/jquery.min.js"></script>
    <?= $this->Html->script('config.js');?>
    <?= $this->Html->script('common.js?v=0004');?>

    <title><?= $pageTitle?></title>
</head>
<body>

<?= $this->Flash->render() ?>
<?= $this->fetch('content') ?>

<?= $this->element('alert_toast_div'); ?>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<?= $this->Html->script('popper.min.js');?>
<?= $this->Html->script('bootstrap.min.js');?>

<!--阿里字体-->
<script src="//at.alicdn.com/t/font_520464_w5k4r97sz0azto6r.js"></script>

</body>
</html>
