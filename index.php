<?php

$myVar = getenv('MY_SHARED_VAR');
$secret = getenv('MY_SHARED_SECRET');

echo $myVar . ' , ' . $secret;