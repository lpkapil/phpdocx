<?php

require_once '../../../classes/CreateDocx.php';

$docx = new CreateDocxFromTemplate('../../files/TemplateList.docx');

$items = array('First item', 'Second item', 'Third item');

$docx->replaceListVariable('LISTVAR', $items);

$docx->createDocx('example_replaceListVariable_1');