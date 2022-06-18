<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
$items=[
    '6'=>'6',
    '10'=>'10',
    '20'=>'20',
    '40'=>'40',
    'all'=>'все',
];

$this->title = 'обращения';
?>
<?php $form = ActiveForm::begin(['id' => 'search-form','method'=>'GET']); ?>
<?= $form->field($search, 'search') ?>
<div class="form-group">
    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'search-button']) ?>
</div>
<?php ActiveForm::end(); ?>

<?php echo $sort->link('data') . ' | ' .$sort->link('name') . ' | ' .$sort->link('phone'); ?>

<div class="site-about">
    <section class="popular-lines">
        <ul class="lines-list">
            <?php foreach($result as $item): ?>
                <li>
                    <h3><?= Html::a($item["name"],['/site/content','id'=>$item["id"]]) ?></h3>
                    <div class="post-content">
                        <span class="data_start_time"><?= $item["phone"]?></span>
                        <span class="data_start_time"><?= $item["data"]?></span>
                        <span class="data_start_time"><?= $item["email"]?></span>
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
           <?= Html::a($i,['/site/appealcontent','page'=>$i,'limit'=>$limit]) ?>
           
      </li>
    <?php endfor; ?>
</ol>
<?php endif ?>

<div class="row">
    <div class="col-lg-5">

    <?php $form2 = ActiveForm::begin(['id' => 'num-form','method'=>'GET']); ?>

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
    
