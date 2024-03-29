<!DOCTYPE html>
<html>
<head>
	<title>CSV generator</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="./style/style.css" style="text/css">
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="./style/animation.css" style="text/css">

	<!--OGPsettings-->
	<meta property="og:title" content="CSV generator for Scratch Account">
    <meta property="og:type" content="article">
    <meta property="og:url" content="https://inpw.jp/app/scratch-csv">
    <meta property="og:image" content="https://inpw.jp/app/scratch-csv/images/ogp.png">
    <meta property="og:site_name"  content="CSV generator for Scratch Account">
    <meta property="og:description" content="Create csv file for create new scratch student account.">
    

</head>

<body>

	<div id="container">
	
		<div id="header">
			<img src="./images/logo.png" class="headerLogo">
		</div>

		<div id="main">

			<form action="makeCSV.php" method="POST">
				<input type="number" name="numberOfPeople" placeholder="Number of create new accounts." class="textBox" min="1" max="50" required><br>
				<p>User name is ○○○○01, ○○○○02, ○○○○03 ... </p>
				<input type="text" name="username" placeholder="Same username." class="textBox" required><br>
				<p>Password is ○○○○01, ○○○○02, ○○○○03 ... </p>
				<input type="text" name="password" placeholder="Same password." class="textBox" required>
				<input type="hidden" name="flag" value="true">
				<input type="submit" value="Create csv file" class="submitButton">
			</form>
		
		</div>

		<div id="footer">
			<p><a href="https://scratch.mit.edu" class="textLink">Scratch</a> is created by MIT MediaLab Life Long Kindergarten Team.</p>
			<p>This project is created by Kirie Miyajima.</p>
			<p>Source is available on <a href="https://github.com/mjk0513/csvGenerator4ScratchAccount" class="textLink">GitHub</a>.</p>
		
			<a href="https://twitter.com/kiriem_"><i class="fa fa-twitter-square fa-3x faa-spin animated-hover"></i></a> 
			<a href="https://github.com/kiriem/csvGenerator4ScratchAccount"><i class="fa fa-github fa-3x faa-spin animated-hover"></i></a>

		</div>

		
		


	</div>

</body>
</html>