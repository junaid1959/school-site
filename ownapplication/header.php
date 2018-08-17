<?php
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title></title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<header>
<nav>
<div class="main-wrapper">
<ul>
<li> <a href="index.php">Home</a></li>
</ul>
<div class="nav-login">
<!--//php code for logout-->
<?php
if(isset($_SESSION['u_id']))
{
echo'<form action="includes/logout.inc.php" method="post">
<button type="submit" name="submit">Logout</button>
</form>';
}else
{
echo'<form action="includes/login.inc.php" method="post">
<input type="text" name="uid" placeholder="emailid/username" />
<input type="password" name="pwd" placeholder="passowrd"  />
<button type="submit" name="submit"  /> login</button>
<a href="signup.php">Signup</a>
</form>';
}
?>

</div>
</div>
</nav>
</header>


