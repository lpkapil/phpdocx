<?php

require_once '../../../classes/CreateDocx.php';

$docx = new CreateDocx();

$docx->addLineNumbering();
$text = 'This is just a chunk of text that we will repeat couple of times to fill up some space. ';
$text .= $text;
$docx->addText($text);
$docx->addText('Another chunk of text');
$docx->addText($text);

$docx->createDocx('example_addLineNumbering_1');