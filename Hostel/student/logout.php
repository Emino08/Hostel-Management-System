<?php
session_start();
unset($_SESSION['login']);
unset($_SESSION['username']);

header('../Index.php')
?>