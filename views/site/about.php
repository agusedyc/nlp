<?php

/* @var $this yii\web\View */

use Oefenweb\DamerauLevenshtein\DamerauLevenshtein;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

$this->title = 'Damerau Levenshtein Distance';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        Damerau Levenshtein Distance :
    </p>

    <?php $form = ActiveForm::begin([
        'id' => 'damerau-form',
        'layout' => 'horizontal',
    ]); ?>

        <?= $form->field($model, 'first_text')->textInput(['autofocus' => true]) ?>

        <?= $form->field($model, 'second_text')->textInput() ?>

        <div class="form-group">
            <div class="col-lg-offset-1 col-lg-11">
                <?= Html::submitButton('Check', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            </div>
        </div>

    <?php ActiveForm::end(); ?>
    <br><br>

    
    <?php 
    	if (isset($distance)) {
    		echo '<h2>Tabel Matrix</h2>';
    		echo '<pre>';
	        print_r($distance->displayMatrix());
	        echo '</pre>';	        
    	} 

     ?>
     <br><br>
     <?php if (isset($distance)): ?>
     <h2>Damerau Levenshtein Distance = </h2><h3><?php echo $distance->getSimilarity(); ?></h3>
     <?php endif ?>
</div>
