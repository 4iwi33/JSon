<?php

use Texlab\MyDB\DB;
use Texlab\MyDB\DbEntity;
use Texlab\MyDB\Runner;

include "../vendor/autoload.php";

$h = new Runner(DB::Link([
    'host' => 'localhost',
    'username' => 'root',
    'password' => '',
    'dbname' => 'admin'
]));
