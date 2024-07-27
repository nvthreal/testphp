<?php

$authCookie = "user";
$authCookieValue = "test";

setcookie($authCookie,$authCookieValue, time()+(86400), "/");


?>