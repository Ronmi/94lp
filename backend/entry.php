<?php

require_once('vendor/autoload.php');

$mux = require('mux/compiled.php');

Fruit\Bootstrap::FromFPM($mux);
