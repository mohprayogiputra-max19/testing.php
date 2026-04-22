<?php

require_once '../Classes/Session.php';

$session = new Session();
$session->destroy();

header("Location: ../login.php");
exit;

?>