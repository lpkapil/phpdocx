<?php

require_once '../../../classes/CreateDocx.php';

$docx = new CreateDocx();

$docx->addText('Image with relativeToHorizontal and relativeToVertical values.');

$options = array(
    'src' => '../../img/image.png',
    'scaling' => 50,
    'relativeToHorizontal' => 'page',
    'relativeToVertical' => 'page',
    'textWrap' => 2,
    'float' => 'right',
    'verticalAlign' => 'top',
);

$docx->addImage($options);

$docx->createDocx('example_addImage_5');