<?php

require_once '../../../classes/CreateDocx.php';

$docx = new CreateDocxFromTemplate('../../files/TemplateCharacterStyles.docx');

$docx->parseStyles('../../files/TemplateCharacterStyles.docx');

$docx->createDocx('example_parseStyles_4');