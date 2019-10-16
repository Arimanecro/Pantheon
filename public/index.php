<?php

require_once __DIR__ .'/../app/core/bootstrap/Pantheon.php';

Path::get('/', function() { View::show('welcome'); });