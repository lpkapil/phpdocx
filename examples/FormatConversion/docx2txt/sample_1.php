<?php

require_once '../../../classes/CreateDocx.php';

$options = array('paragraph' => true, 'list' => true,'table' => true, 'footnote' => true, 'endnote' => true, 'chart' => 0);
CreateDocx::DOCX2TXT('../../files/Text.docx', 'document_1.txt', $options);