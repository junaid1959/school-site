<?php
include_once 'header.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title></title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body >

<section class="main-container">
<div class="main-wrapper">
<h1>Home</h1>

<?php
if (isset($_SESSION['u_id'])){
echo"syed your are loged in u did great job";
}
?>
</div>
</section>

<?php 
include_once'footer.php';
?>

</body>
</html>