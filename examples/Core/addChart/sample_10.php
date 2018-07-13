<?php

require_once '../../../classes/CreateDocx.php';

$docx = new CreateDocx();

$docx->addText('We will now add a dot scattered chart to the Word document:');

$data = array(
    'data' => array(
        array(
            'values' => array(10, 0),
        ),
        array(
            'values' => array(17, 2),
        ),
        array(
            'values' => array(18, 4),
        ),
        array(
            'values' => array(25, 6),
        ),
    ),
);

$paramsChart = array(
    'data' => $data,
    'type' => 'scatterChart',
    'border' => 0,
    'color' => 5,
    'jc' => 'center',
    'legendPos' => 'r',
    'legendOverlay' => true,
    'haxLabel' => 'vertical label',
    'vaxLabel' => 'horizontal label',
    'haxLabelDisplay' => 'horizontal',
    'vaxLabelDisplay' => 'rotated',
    'hgrid' => 2,
    'vgrid' => 2,
    'symbol' => 'dot',//dot, line
    'showTable' => true
);
$docx->addChart($paramsChart);

$docx->createDocx('example_addChart_10');