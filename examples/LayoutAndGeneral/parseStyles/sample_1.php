<?php

require_once '../../../classes/CreateDocx.php';

$docx = new CreateDocx();

// parse styles of the default template
$docx->parseStyles();

$docx->createDocx('example_parseStyles_1');