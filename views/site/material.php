<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\LinkPager;

$this->title = 'Магазин';
?>
<div class="site-about">

    <section class="m-pad bg-alt" id="news">
        <div class="container">
            <div class="material-wrap">
                <div class="market-content">
                    <div>
                        <?= Html::a($material->title,
                            ['site/material', 'id' => $material->id], ['class' => 'market-header']
                        )?>
                    </div>
                </div>
                <div>
                    <img width="100%" src="/image/<?= $material->file_name?>" alt="">
                </div>
            </div>
        </div>
    </section>
</div>