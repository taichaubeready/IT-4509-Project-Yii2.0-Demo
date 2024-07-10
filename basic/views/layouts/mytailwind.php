<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

<head>
    <title><?php echo "Nhat Tai - Test Tailwind CSS" ?></title>
    <?php $this->head() ?>
</head>

<body class="d-flex flex-column h-100">
    <?php $this->beginBody() ?>

    <!-- Header -->
    <div class="container-fluid header"></div>
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-red-600">Header</h1>
        </div>
    </div>
    </div>

    <br>

    <!-- Content -->
    <div class="container-fluid header"></div>
    <div class="row">
        <div class="col-md-12"><?php echo $content ?></div>
    </div>
    </div>

    <br>

    <!-- Footer -->
    <div class="container-fluid header"></div>
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-blue-600">Footer</h1>
        </div>
    </div>
    </div>

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>


