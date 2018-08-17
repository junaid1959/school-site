<?php
include_once 'header.php';
?>
<section class="main-container">
<div class="main-wrapper">
<h1>signup</h1>
<div class="signup">
<form class="signup-form" action="includes/signup.inc.php" method="post">
<input type="text" name="first" placeholder="first name" />
<br />
<input type="text" name="last" placeholder="last name" />
<br />
<input type="text" name="email" placeholder="email id" />
<br />
<input type="text" name="uid" placeholder="user id" />
<br />
<input type="password" name="pwd" placeholder="password" />
<br />
<button type="submit" name="submit">sign up</button>
</form>

<!--/========this code to check validation of form write this code with in php tags========-->
<?php
//$fullUrl= "http://$_SERVER['HTTP_HOST']$_SERVER['REQUEST_URI']";
//
//if(strpos($fullUrl, "signup=empty") == true) {
//echo"<p class="error"> some fiels are empty! </p>";
//exit();
//}
//elseif(strpos($fullUrl, "signup=char") == true) {
//echo"<p class="error"> u used some invalid charecter! </p>";
//exit();
//}
//elseif(strpos($fullUrl, "signup=email") == true) {
//echo"<p class="error"> u used some invalid charecter! </p>";
//exit();
//}
//elseif(strpos($fullUrl, "signup=success") == true) {
//echo"<p class="error"> u have been signup sucessfully! </p>";
//exit();
//}
//?>


</div>
</div>
</section>

<?php 
include_once'footer.php';
?>
