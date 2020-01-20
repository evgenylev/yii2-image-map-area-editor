<?php
/**
 * Created by PhpStorm.
 * User: Evgeny.Levashov@gmail.com
 * Date: 1/12/2020
 * Time: 11:35 AM
 */

namespace backend\widgets;

use yii\base\Widget;

class ImageMapAreaWidget extends Widget
{
    public $viewFile = 'image-map-area/index';

    public $imageUrl;
    public $fieldId;
    public $fieldName;
    public $fieldValue;

    public function init()
    {
        parent::init();
    }

    public function run()
    {
        ImageMapAreaAsset::register($this->view);

        return $this->render($this->viewFile, [
            'imageUrl' => $this->imageUrl,
            'fieldName' => $this->fieldName,
            'fieldValue' => $this->fieldValue,
            'fieldId' => $this->fieldId,
        ]);
    }
}