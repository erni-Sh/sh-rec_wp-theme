<?php
header('Content-Type: text/html; charset=utf-8');
file_put_contents(iconv("UTF-8", "windows-1251", $_POST['fileName']), $_POST['peaks']);
?>
