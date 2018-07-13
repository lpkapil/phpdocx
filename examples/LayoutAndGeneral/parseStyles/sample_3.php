<?php

require_once '../../../classes/CreateDocx.php';

$docx = new CreateDocx();

// parse styles of an external template
$docx->parseStyles('../../files/stylesTemplate.docx');

$docx->createDocx('example_parseStyles_3');