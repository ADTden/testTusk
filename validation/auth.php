<?php
include($_SERVER['DOCUMENT_ROOT']."/header.php");
$userLogin=filter_var(trim($_POST[userLogin]), FILTER_SANITIZE_STRING);
$userPassword=filter_var(trim($_POST[userPassword]), FILTER_SANITIZE_STRING);


if (strlen($userLogin) ==0 || strlen($userPassword)==0) {
    echo "Поля не могут быть пустыми";
    exit();
}
$query = "SELECT * FROM `users` WHERE `login` = '$userLogin' AND `password` = '$userPassword'";
$result = mysqli_query($link, $query);
$user= mysqli_fetch_assoc($result);
if (count($user)<1) {
    header('Location: /forms/logIn.php?login=NO');
} else {
    setcookie('user', $user['Login'], time()+360, "/");
    header('Location: /?login=YES');
}
include($_SERVER['DOCUMENT_ROOT']."/footer.php");
