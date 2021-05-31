<?= $this->include('/templates/header'); ?>
<?= $this->include('/templates/navbar'); ?>

<h2>ini dasboard</h2>
<h3>hello <?= session()->get('firstname'); ?> <?= session()->get('lastname'); ?> </h3>
<?= $this->include('/templates/footer'); ?>