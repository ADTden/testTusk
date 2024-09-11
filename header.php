<?php
$link = mysqli_connect($host = 'localhost', $user = 'root', $password, $dbname = 'Test') or die(mysqli_error($link));
mysqli_query($link, "SET NAMES 'utf8'");
$queryCount = mysqli_query($link, "SELECT * FROM Tusks");
$num_rows = mysqli_num_rows($queryCount);
if ($_GET[page] < 1) {
	$_GET[page] = 1;
}
if ($_GET[order] == "") {
	$_GET[order] = "ASC";
}
if ($_GET[orderColum] == "") {
	$_GET[orderColum] = "Name";
}
$startLimit = $_GET[page] * 3 - 3;
$countPage = ceil($num_rows / 3);
$result = mysqli_query($link, "SELECT * FROM Tusks ORDER BY " . $_GET[orderColum] . " " . $_GET[order] . " LIMIT $startLimit,3") or die(mysqli_error($link));
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<title></title>
</head>

<body>
	<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
		<h5 class="my-0 mr-md-auto font-weight-normal"><a href=" /" style="text-decoration:none; color:black;">Test</a></h5>
		<nav class="my-2 my-md-0 mr-md-3">
			<a class="p-2 text-dark" href=" /forms/CreateTusk.php">Создать задачу</a>
		</nav>
		<? if ($_COOKIE['user'] == "admin") { ?>
			<a class="btn btn-outline-primary" href=" /validation/logOut.php">Выйти</a>
		<? } else { ?>
			<a class="btn btn-outline-primary" href=" /forms/logIn.php">Войти</a>
		<? } ?>
	</div>
	<div>
		Privet
		<p>
			Kak dela
		</p>
	</div>