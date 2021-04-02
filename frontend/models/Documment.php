<?php

namespace frontend\models;

use Yii;
use yii\db\Query;

/**
 * This is the model class for table "documment".
 *
 * @property int $id
 * @property string $title
 * @property string $avatar
 * @property string $link
 * @property int|null $status 0:file, 1:image, 2:note
 * @property string|null $create
 * @property string|null $update
 */
class Documment extends \common\models\Documment
{
    public function getDocumment(){
        return (new Query())
            ->select('*')
            ->from('documment')
            ->where('id')
            ->all();
    }
}