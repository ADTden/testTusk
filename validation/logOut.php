<?include($_SERVER['DOCUMENT_ROOT']."/header.php");
setcookie('user',$user['login'],time()-360,"/");
header("Location: /");
?>
