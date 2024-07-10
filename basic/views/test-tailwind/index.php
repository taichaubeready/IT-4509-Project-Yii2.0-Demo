<?php
/** @var yii\web\View $this */

use app\assets\AppAsset;

AppAsset::register($this);
?>

<?php $this->beginPage() ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhat Tai - Test Tailwind CSS</title>
    <?php $this->head() ?>
</head>

<body>
    <?php $this->beginBody() ?>

    <!-- Content -->
    <div class="container-fluid" id="content">
        <h1 class="text-green-600">Nhat Tai - Test Tailwind CSS</h1>

        <p class="text-yellow-600">
            You may change the content of this page by modifying
            the file <code><?= __FILE__; ?></code>.
        </p>
    </div>

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>