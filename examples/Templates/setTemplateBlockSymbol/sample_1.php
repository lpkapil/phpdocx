<?php

require_once '../../../classes/CreateDocx.php';

$docx = new CreateDocxFromTemplate('../../files/TemplateBlocksCustomSymbol.docx');

$docx->setTemplateBlockSymbol('MYBLOCK');

$docx->deleteTemplateBlock('1');

$docx->createDocx('example_setTemplateBlockSymbol_1');