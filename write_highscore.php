<?php
$file = 'highscore.txt';
$current .= $_GET['score'];
file_put_contents($file, $current);
?>