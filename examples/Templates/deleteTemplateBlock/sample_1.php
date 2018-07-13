<?php

require_once '../../../classes/CreateDocx.php';

$docx = new CreateDocxFromTemplate('../../files/TemplateBlocks.docx');

$docx->deleteTemplateBlock('FIRST');

$docx->createDocx('example_deleteTemplateBlock_1');