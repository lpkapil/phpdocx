<?php

require_once '../../../classes/CreateDocx.php';

$docx = new CreateDocxFromTemplate('../../files/TemplateVariables.docx');

print_r($docx->getTemplateVariables());