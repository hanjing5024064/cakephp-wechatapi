<!doctype html>
<html class="no-js">
<head>
    <?= $this->element('amazeui_head'); ?>
</head>
<body>
<header data-am-widget="header"
        class="am-header am-header-default">
    <?= $this->element('amazeui_header'); ?>
</header>

<div>
    <?= $this->Flash->render() ?>
    <?= $this->fetch('content'); ?>
</div>

<?= $this->element('amazeui_foot'); ?>

</body>
</html>