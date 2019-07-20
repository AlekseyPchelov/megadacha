<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\LinkPager;

$this->title = 'Магазин';
?>
<div class="site-about">

    <section class="m-pad bg-light" id="market">
        <div class="container">
            <div class="row">
                <div class="market-main col-12 d-flex justify-content-between mt-2">
                    <?php foreach ($materials as $material) { ?>
                        <!--Material block-->
                        <div class="market-wrap">
                            <div>
                                <img class="market-header-wrapper" width="100%" src="/image/<?= $material->file_name?>" alt="">
                            </div>
                            <div class="market-content">
                                <div>
                                    <?= Html::a($material->title,
                                        ['site/material', 'id' => $material->id], ['class' => 'market-header']
                                    )?>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <?php
            echo LinkPager::widget([
                'pagination' => $pages,
                'pageCssClass' => 'page-item',
                'prevPageCssClass' => 'page-item',
                'nextPageCssClass' => 'page-item',
                'firstPageCssClass' => 'page-item',
                'lastPageCssClass' => 'page-item',
                'linkOptions' => ['class' => 'page-link'],
                'prevPageLabel' => 'Назад',
                'nextPageLabel' => 'Далее',
                'disabledListItemSubTagOptions' => [
                    'tag' => 'a',
                    'class' => 'page-link',
                    'href' => '#',
                    'tabindex' => '-1'
                ],
            ]);
            ?>
        </div>
</section>
</div>
