<?php
if (!isset($_SESSION['email']))
{
die("You are not login yet!");
}
if ($_SESSION['level']!="User") 
{
die("You are not User!");
}
?>