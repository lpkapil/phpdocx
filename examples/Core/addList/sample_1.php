<?php

require_once '../../../classes/CreateDocx.php';

$docx = new CreateDocx();

$itemList = array(
    'Line 1',
    'Line 2',
    'Line 3',
    'Line 4',
    'Line 5'
);

// set the style type to 1: unordered list
$docx->addList($itemList, 1);

$docx->createDocx('example_addList_1');