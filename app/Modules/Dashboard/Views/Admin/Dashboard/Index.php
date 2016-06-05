<section class="content-header">
    <h1><?= __d('dashboard', 'Dashboard'); ?></h1>
    <ol class="breadcrumb">
        <li><a href='<?= site_url('users/dashboard'); ?>'><i class="fa fa-dashboard"></i> <?= __d('dashboard', 'Dashboard'); ?></a></li>
    </ol>
</section>

<!-- Main content -->
<section class="content">

<?= Session::getMessages(); ?>

<div class="box box-widget">
    <div class="box-body">
        <h4><strong><?= __d('dashboard', 'Yup. This is the Dashboard.'); ?></strong></h4>
        <p><?= __d('dashboard', 'Someday, we\'ll have widgets and stuff on here...'); ?></p>
    </div>
</div>

</section>