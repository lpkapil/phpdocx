<?php

require_once '../../../classes/CreateDocx.php';

$docx = new CreateDocx();

// set the background color of the document
$docx->setBackgroundColor('FFFFCC');
// include a paragraph of plain text
$docx->addText('This document should have a pale yellow background color.');

$docx->createDocx('example_setBackgroundColor_1');