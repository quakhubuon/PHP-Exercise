<?php
	require 'DataProvider.php';
	if (isset($_POST['id']) && isset($_POST['title']) && isset($_POST['description']) && isset($_POST['author']) && isset($_POST['year'])){
		$sql = "UPDATE T_BOOK SET" .
			" BOOK_TITLE='" . $_POST['title'] . "'," . 
			" BOOK_DESC='" . $_POST['description'] . "'," . 
			" BOOK_AUTHOR='" . $_POST['author'] . "'," . 
			" BOOK_YEAR=" . $_POST['year'] . 
			" WHERE BOOK_ID=" . $_POST['id'] . ";";
		//echo $sql;
		$result = executeQuery($sql);
	}
	/* Redirect to a different page in the current directory that was requested */
	$hostURL  = $_SERVER['HTTP_HOST'];
	$dirURL   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
	$extraURL = 'editbook.php';
	$strURL = "http://" . $hostURL . $dirURL . "/" . $extraURL;
		//echo($strURL);
	header("Location:$strURL");
	//exit;
?>