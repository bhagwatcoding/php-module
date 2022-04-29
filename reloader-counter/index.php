<?php
$rdir = "reloader-counter/";
$file_rpath = $rdir.'storage.log';
$fpm = fopen($file_rpath, 'a');
fwrite($fpm,'0');
$reload_read = filesize($file_rpath);
echo $reload_read;
?>