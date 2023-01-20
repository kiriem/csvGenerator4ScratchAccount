<?php
    $flag = $_POST['flag'];
	$text = array();

	if ($flag) {
		$numberOfPeople = $_POST['numberOfPeople'];
		$username = $_POST['username'];
		$password = $_POST['password'];

		for ($i=0; $i < $numberOfPeople; $i++) { 
			$num = $i+1;
			if($i<9){
				$num = "0".$num;
			}
			$text[$i] = "{$username}{$num}, {$password}{$num}\n";
			
		}

		//csvファイル作成

		$date = date("Y-m-d H:i:s");

		$fileName = "ScratchAccountCSV.csv";
		$file = fopen($fileName, "w");
		
		
		foreach($text as $line){
			fwrite($file, $line);
		}

		fclose($file);

		header("Content-type: application/octet-stream");
		header('Content-Disposition: attachment; filename="'.$fileName.'"');
		readfile($fileName);

	}

    header("Location: index.php");