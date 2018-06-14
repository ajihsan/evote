<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: page_landing.php"); // Redirecting To Home Page
}
?>
