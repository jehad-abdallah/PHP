<?php
header('Content-Type: text/plain');

echo 'Hello, ';
//isset — Determine if a variable is set and is not NULL
if (isset($_GET['name']))
	//$_GET -- $HTTP_GET_VARS [deprecated] — HTTP GET variables
    echo 'Dear '. $_GET['name' + '!'];
else
    echo 'stranger!';