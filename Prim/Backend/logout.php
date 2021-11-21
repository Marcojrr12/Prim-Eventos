<?php

session_start();
unset($_SESSION['usuario']);
unset($_SESSION['Email']);
header('Location: ../login.php');
exit();

?>