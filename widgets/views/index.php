<?php
/**
 * Created by PhpStorm.
 * User: Evgeny.Levashov@gmail.com
 * Date: 1/13/2020
 * Time: 7:24 PM
 */

use yii\bootstrap\Html;

/* @var $imageUrl string */
/* @var $fieldName string */
/* @var $fieldValue string */
/* @var $fieldId string */

echo Html::textarea($fieldName, $fieldValue, [
    'rows' => '3',
    'id' => $fieldId,
    'class' => 'canvas-area',
    'data-image-url' => $imageUrl,
]);
