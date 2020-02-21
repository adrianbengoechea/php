<?php

require_once('app/config.php');

$_SESSION['account'] = NULL;
alert_message('Session closed successfully', 'alert-success');
redirect_to_home();









?>