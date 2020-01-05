<?php
$getJokesJSON = file_get_contents('http://api.icndb.com/jokes/random/3');
$getJokesObj = json_decode($getJokesJSON);

print_r($getJokesObj->value[1]->joke);