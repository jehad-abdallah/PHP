<?php
header('Content-Type: text/plain');

echo 'Query string = ';
//$_SERVER['QUERY_STRING']	Returns the query string if the page is accessed via a query string
echo "'", $_SERVER["QUERY_STRING"], "'";