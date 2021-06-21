<?php
session_start();
unset($_SESSION['code']);
session_destroy();
header('location:index.html');
?>