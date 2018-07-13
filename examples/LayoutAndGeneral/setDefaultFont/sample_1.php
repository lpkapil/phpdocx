<?php

require_once '../../../classes/CreateDocx.php';

$docx = new CreateDocx();

// set the default font for the document
$docx->setDefaultFont('Arial Narrow');

// include some paragraphs of plain text
$docx->addText('This text is going to show in Arial Narrow font because it is the chosen default font.');
$docx->addText('The standard default font is usually Calibri.');

$docx->createDocx('example_setDefaultFont_1');