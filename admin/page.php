<?php
@$page = $_GET['page'];
if($page=="" || $page=="home")
{
	include("welcome.php");
}
else if($page=="expert")
{
	include("expert.php");
}
else if($page=="admin")
{
	include("admin.php");
}
else if($page=="user")
{
	include("user.php");
}
?>
