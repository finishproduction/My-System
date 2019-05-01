<?php
if (!isset($_SESSION['email']))
{
die("You are not login yet!");
}
if ($_SESSION['level']!="Admin") 
{
die("You are not Admin!");
}
?>