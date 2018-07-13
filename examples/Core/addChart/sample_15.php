<?php

require_once '../../../classes/CreateDocx.php';

$docx = new CreateDocx();

$docx->addText('We will now add a chart from a XLSX:');

$paramsChart = array(
    'externalXLSX' => array(
        'src' => '../../files/Book.xlsx',
    ),
    'sizeX' => 10,
    'sizeY' => 5,
);
$docx->addChart($paramsChart);

$docx->createDocx('example_addChart_15');