<?php
session_start();
if(isset($_SESSION['user_id']))
{
    unset($_SESSION);
    unset($_COOKIE);
    session_destroy();
    echo "1";
}
else
{
    echo "0";
}
?>
