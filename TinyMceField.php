<?php
/**
 * Created by PhpStorm.
 * User: vov4ik08
 * Date: 25.02.14
 * Time: 10:32
 */

namespace Apollo;


use yii\helpers\Html;
use yii\helpers\Json;
use yii\widgets\InputWidget;

class TinyMceField extends InputWidget
{


    public $data;
    public $clientOptions;
    public $language = false;

    public function run()
    {
        $view = $this->getView();
        TinyMceAssets::register($view);
        $clientOptions = Json::encode($this->clientOptions);
        $view->registerJs("
        tinymce.init(
        $clientOptions); ");


        $this->renderWidget();
    }

    private function renderWidget()
    {

       echo Html::activeTextarea($this->model, $this->attribute, $this->options);

    }
} 