<?php
require_once('gauth.php');
if(session_destroy()) // Destroying All Sessions
{
header("Location: https://www.google.com/accounts/Logout?continue=https://appengine.google.com/_ah/logout?continue=http://localhost/evote/page_landing.php"); // Redirecting To Home Page
}
?>
