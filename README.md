#TinyMce widget for yii2
Usage
```php
 <?=
    $form->field($model, 'message')->widget(\Apollo\TinyMceField::className(), ['options' => ['rows' => 6],

        'clientOptions' => [

            'selector' => 'textarea',
            'theme' => "modern",
            'plugins' => ["advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table contextmenu directionality",
                "emoticons template paste textcolor"],


        ],

    ]);

    ?>
```



