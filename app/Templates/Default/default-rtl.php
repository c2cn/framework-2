<?php
/**
 * Default RTL Layout - a Layout similar with the classic Header and Footer files.
 */
?>
<!DOCTYPE html>
<html lang="<?php echo LANGUAGE_CODE; ?>" dir="rtl">
<head>
    <meta charset="utf-8">
    <title><?= $title .' - ' .SITETITLE; ?></title>
<?php
echo $meta; // Place to pass data / plugable hook zone

Assets::css([
    template_url('css/bootstrap-rtl.min.css', 'Default'),
    template_url('css/bootstrap-rtl-theme.min.css', 'Default'),
    'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css',
    template_url('css/style-rtl.css', 'Default'),
]);

echo $css; // Place to pass data / plugable hook zone
?>
</head>
<body>
<?= $afterBody; // Place to pass data / plugable hook zone ?>

<div class="container">
    <p class="pull-right">
        <a href='<?= site_url('language/cs'); ?>'>Czech</a> |
        <a href='<?= site_url('language/en'); ?>'>English</a> |
        <a href='<?= site_url('language/de'); ?>'>German</a> |
        <a href='<?= site_url('language/fr'); ?>'>French</a> |
        <a href='<?= site_url('language/it'); ?>'>Italian</a> |
        <a href='<?= site_url('language/ja'); ?>'>Japanese</a> |
        <a href='<?= site_url('language/nl'); ?>'>Dutch</a> |
        <a href='<?= site_url('language/fa'); ?>'>Persian</a> |
        <a href='<?= site_url('language/pl'); ?>'>Polish</a> |
        <a href='<?= site_url('language/ro'); ?>'>Romanian</a> |
        <a href='<?= site_url('language/ru'); ?>'>Russian</a> |
        <a href='<?= site_url('language/es'); ?>'>Spanish</a>
    </p>
    <div class="clearfix"></div>
    <p>
        <img src='<?= template_url('images/nova.png', 'Default'); ?>' alt='<?= SITETITLE; ?>'>
    </p>

    <?= $content; ?>
</div>

<?php
Assets::js([
    'https://code.jquery.com/jquery-1.12.1.min.js',
    template_url('js/bootstrap-rtl.min.js', 'Default'),
]);

echo $js; // Place to pass data / plugable hook zone
echo $footer; // Place to pass data / plugable hook zone
?>

</body>
</html>
