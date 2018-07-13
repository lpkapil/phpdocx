<?php

require_once '../../../classes/CreateDocx.php';

$docx = new CreateDocxFromTemplate('../../files/TemplateBlocks.docx');

$docx->clearBlocks();

$docx->createDocx('example_clearBlocks_1');