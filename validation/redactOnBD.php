<?include($_SERVER['DOCUMENT_ROOT']."/header.php");
if ($_COOKIE['user'] =="admin") {
    $text = htmlspecialchars($_POST['tuskText']);
    $query = "UPDATE tusks SET Text = '$text', redact = 'Y' WHERE ID = ".$_POST['userID'];
    $result = mysqli_query($link, $query)or die(mysqli_error($link));
    header('Location: /?tusk=redact');
}else{
  header('Location: /forms/logIn.php');
}
