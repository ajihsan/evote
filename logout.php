<?php
require_once('gauth.php');
if(session_destroy()) // Destroying All Sessions
{
header("Location: page_landing.php"); // Redirecting To Home Page
}
?>
