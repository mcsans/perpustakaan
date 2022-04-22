<!DOCTYPE html>
<html>
<head>
	<title>Access Blocked!</title>
	<style type="text/css">
		.heading {
			color: #666;
			font-size: 150px;
			text-align: center;
			letter-spacing: 15px;
		}

		.title {
			color: #666;
			text-align: center;
			margin-top: -90px;
			letter-spacing: 1px;

		}

		.notif {
			color: #666;
			font-size: 20px;
			margin-top: -10px;
			text-align: center;
			letter-spacing: 1px;

		}

		.back {
			margin-left: 45%;
			margin-top: 10px;
			color: white;
			border: none;
			font-size: 17px;
			background-color: #717fe0;
			border-radius: 5px;
			padding: 5px 10px;
		}
	</style>
</head>
<body>
	<h1 class="heading">403</h1>
	<h1 class="title">YOU SHALL NOT PASS</h1>
	<p class="notif"><i>Sorry, but you don't have permission to access this page</i></p>
	<button class="back" onclick="history.go(-1);">GO BACK</button>

	<?php die(); ?>
</body>
</html>