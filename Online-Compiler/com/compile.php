<?php

	$languageID=$_POST["language"];
	$file_format = $_POST["file_format"];

        error_reporting(0);

	if($file_format == "Single file"){
		if($languageID == "c"){
			include("../compilers/c.php");
		}
		else if($languageID == "cpp"){
			include("../compilers/cpp.php");
		}
	}

	else if($file_format == "Multi file"){
		if($languageID == "c"){
			include("../compilers/mul_c.php");
		}
		else if($languageID == "cpp"){
			include("../compilers/mul_cpp.php");
		}

	}

	else if($file_format == "Multi with makefile"){
		include "../compilers/make.php";
	}


?>
