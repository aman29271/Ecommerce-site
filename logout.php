<?php
session_start();
session_unset();
session_destroy();
function goback()
{
    header("Location: {$_SERVER['HTTP_REFERER']}");
    exit;
}
 
goback();


