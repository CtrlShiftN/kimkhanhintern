<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

//var_dump($arrDocumment['0']['title']);
foreach ($arrDocumment as $value) {
    ?>

    <a class="text-decoration-none row" href="#" data-toggle="collapse" data-target="#collapse<?= $value['id'] ?>"
       aria-expanded="false" aria-controls="collapse">
        <p class="py-3 mb-0 border-top border-dark col-10 content-faq text-dark font-weight-bold">
            <?= $value['id'] ?>. <?= $value['title'] ?></p>
        <p class="col-2 py-3 mb-0 m-auto border-top border-dark font-weight-bold content-faq text-center"><i
                    class="fas fa-chevron-down"></i></p>
    </a>
<div class="collapse" id="collapse<?= $value['id'] ?>">
        <div class="card card-body border-top border-dark-0 p-1">
            <?= $value['faq'] ?>
        </div>
    </div><?php
}

?>
