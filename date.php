<?php
session_start();

$fp = fopen("log.html", 'a');

fwrite($fp, "<div class='msgln' style='text-align:center;'><i>- - - - - ".date("l, jS \of F Y")." - - - - -</i><br></div>");
fclose($fp);
?>
