

<!DOCTYPE html>
<html>
<head>
  
    
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Home</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/style.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>







</head>
<body>
<div class="main">
<div class="row">
<div class="col-sm-12">
<nav class="navbar navbar-inverse navbar-fixed-top nbar">
    <div class="navbar-header">
      <a class="navbar-brand lspace" href="index.php">RCFI Online Compiler</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="space"><a href="compiler.php"><i class="fa fa-code ispace"></i>Compiler</a></li>
      <li class="space"><a href="archive.php"><i class="fa fa-archive ispace"></i>Problem Archive</a></li>
      <li class="space"><a href="contest.php"><i class="fa fa-cogs ispace"></i>Contests</a></li>
      <li class="space"><a href="debug.php"><i class="fa fa-check-square ispace"></i>Debug</a></li>
     
      
    </ul>
  
</nav>
</div>
</div>


<div class="row log">
<div class="col-sm-10">
<div class=""><h3 style="text-align:center;">Output</h3></div>
</div>

<div class="col-sm-1">

</div>

<div class="col-sm-1">
  
</div>

</div>




<div class="row cspace">
<div class="col-sm-1">
</div>
<div class="col-sm-8">






<?php

	$languageID=$_POST["language"];
	$file_format = $_POST["format"];

        error_reporting(0);

	if($file_format == "single"){
		if($languageID == "c"){
			include("compilers/c.php");
		}
		else if($languageID == "cpp"){
			include("compilers/cpp.php");
		}
	}

	else if($file_format == "Multi"){
		if($languageID == "c"){
			include("compilers/mul_c.php");
		}
		else if($languageID == "cpp"){
			include("compilers/mul_cpp.php");
		}

	}

	else if($file_format == "Multi_with_makefile"){
		include ("compilers/make.php");
	}
?>

</div>

<div class="col-sm-3">

</div>
</div>
</div>
</div><br><br><br>

<div class="area">
<div class="well foot">
<div class="row area">
<div class="col-sm-3">
</div>

<div class="col-sm-5">


<div class="fm">

<b>Beta Version-2020</b><br>
<b>Developed By <a href="http://protocol.korea.ac.kr/">Embedded Security Lab</a></b>

</div>
</div>


<div class="col-sm-4">
<?php
date_default_timezone_set("Asia/Seoul");
 $t=date("H:i:s");
echo"<b>Server Time:  $t</b>";

?>







</div>
</div>
</div>
</div>
</body>
</html>















