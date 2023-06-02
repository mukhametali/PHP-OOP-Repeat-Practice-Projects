<?php

use App\RMVC\App as App;

session_start();

require_once "../vendor/autoload.php";
require_once "../routes/web.php";

App::run();
