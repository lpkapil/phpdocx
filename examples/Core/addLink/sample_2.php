<?php

require_once '../../../classes/CreateDocx.php';

$docx = new CreateDocx();

$link = new WordFragment($docx);
$link->addLink('Google', array('url'=> 'http://www.google.es'));

$runs = array();
$runs[] = array('text' => 'Now we include a link to ');
$runs[] = $link;
$runs[] = array('text' => ' in the middle of a pragraph of plain text.');

$docx->addText($runs);

$docx->createDocx('example_addLink_2');