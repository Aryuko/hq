<head>
    <meta charset="utf-8">
</head>
<div class="content">
    <form method="post" action="addUser.php">
        <table>
            <tr>
                <td colspan="2" style="text-align: center;">Ny användare:</td>
            </tr>
            <tr>
                <td>Användarnamn: </td>
                <td><input type="text" name="uname"/></td>
            </tr>
            <tr>
                <td>Lösenord: </td>
                <td><input type="password" name="pword"/></td>
            </tr>
            <tr>
                <td>Upprepa lösenord: </td>
                <td><input type="password" name="pword2"/></td>
            </tr>
            <tr>
                <td>Tid: </td>
                <td><input type="number" name="dur"/></td>
            </tr>
            <tr>
                <td><input type="submit"/></td>
            </tr>
        </table>
    </form>
</div>
<?php
    $uname		= $_POST['uname'];
	$pword		= $_POST['pword'];

	require '..includes/db_connect.php';

	$res = $dbh->query("SELECT COUNT(*) AS count FROM `User` WHERE `user_name`='" . $uname . "'");

	$errNum=$dbh->errno;
	if($errNum != 0)
		die("" . $errNum);

	$row = $res -> fetch_array();

	if($row['count'] != 0)
		die("uae");		//User Already Exists

	require '..includes/functions.php';
	$salt 		= generateSalt(32);
	$pepper 	= file_get_contents("pepper.txt");

	$hash = hash("sha256", $salt . $pword . $pepper);

	$passToStore = $salt . $hash;

	$stmt = $dbh->prepare("INSERT INTO `user` (`user_name`, `pass`) VALUES (?, ?)");

	if(!$stmt)
		die("" . $dbh->errno);

	if(! ($stmt->bind_param("ss", $uname, $passToStore)) )
		die("fbp");			//Failed to Bind Parameters

	$stmt->execute();

	$errNum=$dbh->errno;
	if($errNum!=0)
		die("" . $errNum);

	echo "aig";				//All Is Good
?>