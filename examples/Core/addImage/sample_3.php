<?php

require_once '../../../classes/CreateDocx.php';

$docx = new CreateDocx();

$options = array(
    'src' => '../../img/image.png',
    'scaling' => 50,
    'spacingTop' => 10,
    'spacingBottom' => 0,
    'spacingLeft' => 0,
    'spacingRight' => 20,
    'hyperlink' => 'http://www.google.es',
);

$docx->addImage($options);

$docx->createDocx('example_addImage_3');