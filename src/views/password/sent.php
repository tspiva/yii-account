<?php
use nordsoftware\yii_account\helpers\Helper;

/* @var $this \nordsoftware\yii_account\controllers\SignupController */
?>
<div class="register-controller done-action">

    <h1><?php echo CHtml::encode(Yii::app()->name); ?></h1>

    <p class="lead"><?php echo Helper::t('views', 'Email Sent!'); ?></p>

    <p><?php echo Helper::t('views', 'You will soon receive an email with instructions on how to reset your password.') ;?></p>

</div>