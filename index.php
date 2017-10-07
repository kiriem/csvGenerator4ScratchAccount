<!DOCTYPE html>
<html>
<head>
	<title>Scratch2CSV</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="./style/style.css" style="text/css">
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

</head>

<body>

	<div id="container">
	
		<div id="header">
			<img src="./images/logo.png" class="headerLogo">
		</div>

		<div id="main">

			<form action="makeCSV.php" method="POST">
				<input type="number" name="numberOfPeople" placeholder="Number of create new accounts." class="textBox" min="1"><br>
				<input type="text" name="username" placeholder="Same username." class="textBox"><br>
				<input type="text" name="password" placeholder="Same password." class="textBox">
				<input type="hidden" name="flag" value="true">
				<input type="submit" value="Create csv file" class="submitButton">
			</form>
		
		</div>

		<div id="footer">
			<p>Scratch is created by MIT MediaLab Life Long Kindergarten Team.</p>
			<p>This project is created by Kirie Miyajima.</p>
			<p>Source is available on <a href="https://github.com/mjk0513/csvGenerator4ScratchAccount">GitHub</a>.</p>
		</div>

		
		<a href="https://facebook.com/kiriemiyajima"><i class="fa fa-facebook-square fa-3x"></i></a> 
		<a href="https://twitter.com/mjk_0513"><i class="fa fa-twitter-square fa-3x"></i></a> 
		<a href="https://github.com/mjk0513"><i class="fa fa-github fa-3x"></i></a>


	</div>

</body>
</html>