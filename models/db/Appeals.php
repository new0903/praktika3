<?php
namespace app\models\db;

use yii\db\ActiveRecord;


class Appeals extends ActiveRecord{

    public static function tableName(){
        return 'post';//имя таблицы personal
    }

    // public function getUser(){ //связь 1 ко многим 
    //     return $this->hasOne(Users::className(), ['id_user'=>'id']);
    // }
}
