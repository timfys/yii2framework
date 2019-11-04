<?php
?>
<h1>Новая активность</h1>
<h4><?=$name;?></h4>
<div class="row">
    <div class="col-md-8">
        <?php $form=\yii\bootstrap\ActiveForm::begin();?>
        <?=$form->field($model,'title');?>
        <?=$form->field($model,'date')->input('date');?>
        <?=$form->field($model,'isBlocked')->checkbox();?>
        <?php \yii\bootstrap\ActiveForm::end();?>
    </div>
</div>