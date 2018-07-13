<?php

require_once '../../../classes/CreateDocx.php';

$docx = new CreateDocxFromTemplate('../../files/Heading_First.docx');

$link = new WordFragment($docx);
$link->addCrossReference('Page-3', array('type' => 'bookmark', 'referenceName'=> 'sample'));
$docx->replaceVariableByWordFragment(array('link' => $link));

$docx->addCrossReference('Page-1', array('type' => 'heading', 'referenceName'=> 'Heading First'));

$docx->createDocx('example_replaceVariableByWordFragment_4');