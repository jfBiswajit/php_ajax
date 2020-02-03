<?php
$json = file_get_contents('http://api.icndb.com/jokes/random/3');
$obj = json_decode($getJokesJSON);
