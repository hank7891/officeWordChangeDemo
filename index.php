<?php
require 'vendor/autoload.php';

$templateFile = 'doc/temp.docx';
$savePathName = 'doc/demo.docx';

$word = new PhpOffice\PhpWord\TemplateProcessor($templateFile);
$word->setValue('test_change', '我被替換惹');
$word->saveAs($savePathName);