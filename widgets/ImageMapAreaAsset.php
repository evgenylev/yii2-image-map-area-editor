<?php
/**
 * Created by PhpStorm.
 * User: Evgeny.Levashov@gmail.com
 * Date: 1/12/2020
 * Time: 10:45 AM
 */

namespace backend\widgets;

use yii\web\AssetBundle;

class ImageMapAreaAsset extends AssetBundle
{
    public $sourcePath = '@app/widgets';
    public $baseUrl = '@web';

    public $js = [
        'js/jqImageMapArea/canvasAreaDraw.js'
    ];
}