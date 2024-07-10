<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\User;


/** @var yii\web\View $this */
/** @var app\models\User $model */
/** @var ActiveForm $form */
?>
<div class="dangnhap-index">

    <?php $form = ActiveForm::begin([
        'options' => [
            "enctype" => "multipart/form-data",
        ],
    ]); ?>

    <?= $form->field($model, 'username') ?>
    <?= $form->field($model, 'password')->passwordInput() ?>
    <?= $form->field($model, 'name')->dropDownList(['Nam' => 'Nam', 'Nu' => 'Nu'], ['prompt' => 'Chon gioi tinh']) ?>
    <?= $form->field($model, 'email')->dropDownList(ArrayHelper::map(User::find()->where(['id' => '1'])->all(), 'id', 'username')) ?>

    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div><!-- dangnhap-index -->