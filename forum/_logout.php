<?php
session_start();
session_unset();
session_destroy();
header("location:_1_home.php");
exit;

?>