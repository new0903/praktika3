
<?php
use yii\helpers\Html;
$this->title = 'обращение';
//
?>
<?php
//echo $id;
?>
<?php  //debug($postContent) ?>



    <h3><?= $postContent[0]["name"] ?></h3>
    <div class="post-content">
        <span><?= $postContent[0]["phone"]?></span>
        <span><?= $postContent[0]["data"]?></span>
        <span><?= $postContent[0]["email"]?></span>
        <span><?= $postContent[0]["data"]?></span>
        <p class="data_start_time"><?= $postContent[0]["text"]?></p>
    </div>
    <?php  if($postContent[0]["file"]): ?>
        <?=  Html::a('Download '.$postContent[0]["file"],['download','id'=>$postContent[0]["file"]]) ?>
    <?php  endif;?>


