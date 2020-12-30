<?php

// jalankan session
if( !session_id() ) {
    session_start();
}

// teknik bootstraping
require_once '../app/init.php';

$app = new App;