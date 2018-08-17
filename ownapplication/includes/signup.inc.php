
<?php
if(isset($_POST['submit']))
{
include_once 'dbh.inc.php';

$first = mysqli_real_escape_string($conn, $_POST['first']);
$last = mysqli_real_escape_string($conn, $_POST['last']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$uid = mysqli_real_escape_string($conn, $_POST['uid']);
$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
//error handlers
//check for emty field
//hear i am checking that posted data is filled correcrtly or any field left emty
/*if(empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd)){
header("Location: ../signup.php?signup=empty");
exit();
} else{*/
//checks if inputed chraters are valid
if(!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last))
{
header("Location: ../signup.php?signup=invalid");
exit();
}
else{
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
header("Location: ../signup.php?signup=invalidmailid");
exit();
}
else{
$sql="SELECT * FROM users WHER user_uid='$uid'";
$result= mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
if($resultCheck > 0){
header("Location: ../signup.php?signup=userid_has_been_taken");
exit();
}else{
//hashing the password
$hashedPwd= password_hash($Pwd, PASSWORD_DEFAULT);
//INSERTING USER info IN TO DATA BASE
$sql= "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) VALUES ('$first','$last','$email','$uid','$hashedPwd');";
mysqli_query($conn, $sql);
header("Location: ../signup.php?signup=sucessfull");
exit();
}

}

}
} 

else
{
header("Location: ../signup.php");
exit();
}


?>