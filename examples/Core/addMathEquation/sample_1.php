<?php

require_once '../../../classes/CreateDocx.php';

$docx = new CreateDocx();

$docx->addText('We extract a math equation from an external Word file:');

$docx->addMathEquation('../../files/math.docx', 'docx');

$docx->createDocx('example_addMathDocx_1');