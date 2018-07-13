<?php

require_once '../../../classes/CreateDocx.php';

$docx = new CreateDocxFromTemplate('../../files/Checkbox.docx');

$variables = array('check1' => 1, 'check2' => 0, 'check3' => 1);
$docx->tickCheckboxes($variables);

$docx->createDocx('example_tickCheckboxes_1');