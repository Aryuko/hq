<?php
    //$dbh2 = mysqli_connect(encodeURIComponent('mysql10.000webhost.com'), 'a1735782_hq', 'Quadrocopter1', 'a1735782_hq');
    include_once "db_connect.php";

    $x1 = $_POST['x1'];
    $y1 = $_POST['y1'];
    $x2 = $_POST['x2'];
    $y2 = $_POST['y2'];
    $arm = $_POST['arm'];

	$stmt = $dbh->prepare("UPDATE `input` SET x1 = ?, y1 = ?, x2 = ?, y2 = ?, arm = ?  WHERE `id` = 1");
	$stmt->bind_param("ddddi", $x1, $y1, $x2, $y2, $arm);

/*
	$stmt = $dbh->prepare("insert into user values(?, ?) where id = 1");
	$stmt->bind_param("si", "hej", 5); 
*/

	$stmt->execute();
?>