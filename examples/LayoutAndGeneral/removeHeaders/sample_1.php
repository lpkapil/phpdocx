<?php

require_once '../../../classes/CreateDocx.php';

$docx = new CreateDocxFromTemplate('../../files/TemplateHeaderAndFooter.docx');

$docx->removeHeaders();

$docx->createDocx('example_removeHeaders_1');