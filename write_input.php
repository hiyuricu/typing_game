<?php
$file = 'sample.txt';
$current = $_GET['name'];
file_put_contents($file, $current);
?>