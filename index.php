<!DOCTYPE html>
<html>
<head>
	<title>Scratch2CSV</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="./style/style.css" style="text/css">
</head>

<body>
	
	<div id="header">
		<img src="./images/logo.png" class="headerLogo">
	</div>

	<div id="main">

		<form action="makeCSV.php" method="POST">
			<input type="text" name="numberOfPeople" placeholder="作成するアカウント数" class="textBox"><br>
			<input type="text" name="username" placeholder="共通するユーザ名" class="textBox"><br>
			<input type="text" name="password" placeholder="共通するパスワード" class="textBox">
			<input type="hidden" name="flag" value="true">
			<input type="submit" value="create">
		</form>
	
	</div>

	<div id="footer">
		<p>Scratch is created by MIT MediaLab Life Long Kindergarten Team.</p>
		<p>This CSV generator for Scratch account is created by Kirie Miyajima.</p>
		<p>Source is available here.</p>


</body>
</html>