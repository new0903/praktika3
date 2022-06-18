<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
//debug($result);
$items=[
    '6'=>'6',
    '10'=>'10',
    '20'=>'20',
    '30'=>'30',
    '40'=>'40',
    'all'=>'все',
];
$this->title = 'список пользователей';
?>

<?php $form = ActiveForm::begin(['id' => 'search-form','method'=>'GET']); ?>
<?= $form->field($search, 'search') ?>
<div class="form-group">
    <?= Html::submitButton('Найти', ['class' => 'btn btn-primary', 'name' => 'search-button']) ?>
</div>
<?php ActiveForm::end(); ?>
<?= Html::a('Создать пользователя',['/user/create']) ?>
<div class="site-about">
    <h1> Catalog</h1>
    <section class="popular-lines">
        <ul class="lines-list">
            <?php foreach($result as $item): ?>
                <li>
                    <div class="post-content">
                        <span class="data_start_time"><?= $item["name"]?></span>
                        <span class="data_start_time"><?= $item["login"]?></span>
                        <?= Html::a('изменить',['/user/edit','id'=>$item["id"]]) ?>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </section>
</div>

<?php if ($limit!=$pages): ?>
<ol class="pagination">
    <?php for ($i = 1; $i <= $pages; $i = $i + 1): ?>
      <li>
           <?= Html::a($i,['/site/about','page'=>$i,'limit'=>$limit]) ?>
           
      </li>
    <?php endfor; ?>
</ol>
<?php endif ?>

<div class="row">
    <div class="col-lg-5">

    <?php $form2 = ActiveForm::begin(['id' => 'numrow-form','method'=>'GET']); ?>

    <?= $form2->field($model, 'numrow')->dropdownList(
    $items
    ,[
       // 'prompt' => 'Выбор категории',
        'options' => [
            $limit => ['Selected' => true]
        ],
        'onchange'=>'this.form.submit()',
    ])?>


    <?php ActiveForm::end(); ?>

    </div>
</div>
    