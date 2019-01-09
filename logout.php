<?php


session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: RegisterSignIn.html"); // Redirecting To Home Page
}
?>