<?php

require_once '../../../classes/CreateDocx.php';

$docx = new CreateDocx();

$footnote = new WordFragment($docx, 'document');

$footnote->addFootnote(
    array(
        'textDocument' => 'footnote',
        'textFootnote' => 'The footnote we want to insert.',
    )
);
                    
$text = array();
$text[] = array('text' => 'Here comes the ');
$text[] = $footnote;
$text[] = array('text' => ' and some other text.');

$docx->addText($text);
$docx->addText('Some other text.');

$docx->createDocx('example_addFootnote_1');