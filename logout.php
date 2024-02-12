<?php
session_start();
session_unset();
session_destroy();
header("location: banner_page.php");
    exit;
?>