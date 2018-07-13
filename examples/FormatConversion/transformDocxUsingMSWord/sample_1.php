<?php

require_once '../../../classes/CreateDocx.php';

$docx = new CreateDocx();
$pathToScript = dirname ( __FILE__ );
$pathArray = explode("\\", $pathToScript);
array_pop($pathArray);
$pathToFile = implode("\\", $pathArray)."\\files\\";
$targetPath = implode("\\", $pathArray)."\\docx\\";
$myPath = str_replace("\\", "\\\\", $pathToFile);

$docx->transformDocxUsingMSWord('../../files/Test.docx', $targetPath.'test.pdf');
$docx->transformDocxUsingMSWord('../../files/Test.docx', $targetPath.'test.txt');
$docx->transformDocxUsingMSWord('../../files/Test.docx', $targetPath.'test.doc');
$docx->transformDocxUsingMSWord('../../files/Test.docx', $targetPath.'test.rtf');
$docx->transformDocxUsingMSWord('../../files/Test.docx', $targetPath.'test.html');