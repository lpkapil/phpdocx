<?php

require_once '../../../classes/CreateDocx.php';

$docx = new CreateDocx('docm');

$docx->addMacroFromDoc('../../files/fileMacros.docm');

$docx->createDocx('example_addMacroFromDoc_1');
rename('example_addMacroFromDoc_1.docx', 'example_addMacroFromDoc_1.docm');