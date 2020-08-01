<?include($_SERVER['DOCUMENT_ROOT']."/header.php");
if ($_COOKIE['user'] =="admin") {
    $query = "UPDATE tusks SET Status = 'Закрыта' WHERE ID = ".$_POST['userID'];
    $result = mysqli_query($link, $query)or die(mysqli_error($link));
    header('Location: /?tusk=close');
}else{
  header('Location: /forms/logIn.php');
}
