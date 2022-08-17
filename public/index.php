<?php

error_reporting(0);

session_start();

require '../config/config.php';

echo render('main');