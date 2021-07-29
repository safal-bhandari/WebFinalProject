<?php
	require "db_connect.php";
	require "header.php";
	session_start();
	
	if(empty($_SESSION['type']));
	else if(strcmp($_SESSION['type'], "librarian") == 0)
		header("Location: librarian/home.php");
	else if(strcmp($_SESSION['type'], "member") == 0)
		header("Location: member/home.php");
?>

<html>
	<head>
		<title>LMS</title>
		<link rel="stylesheet" type="text/css" href="css/index_style.css" />
	</head>
	<body>
		<div id="allTheThings">
			<div id="member">
				<h1>
					<a href="member">
						&nbsp;Member Login
					</a>
				</h1>
			</div>
			<div id="verticalLine">
				<div id="librarian">
					<h1>
						<a id="librarian-link" href="librarian">
							&nbsp;&nbsp;&nbsp;Librarian Login
						</a>
					</h1>
				</div>
			</div>
		</div>
	</body>
</html>