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
        <script src="js/vendor/jquery-1.12.0.min.js"></script>
        <script src="bootstrap-3.3.7/js/bootstrap.min.js" </script>
        <script src="bootstrap-3.3.7/js/bootstrap.js" </script>


	<script src="http://code.jquery.com/jquery-latest.js"></script>
 	<script type="text/javascript"> </script>




</head>
<body>
<div class="main">

<div class="row">
  <div class="col-sm-12">
  <nav class="shadow navbar navbar-inverse navbar-fixed-top nbar">
    <div class="navbar-header">
      <a class="navbar-brand lspace" href="index.php">RCFI Online Compiler</a>
       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
            </button>
    </div>
    <div class="collapse navbar-collapse navbar-menubuilder">
    <ul class="nav navbar-nav">
      <li class="space"><a href="index.php"><i class="fa fa-code ispace"></i>Compiler</a></li>
      
      <li class="space"><a href="archive.php"><i class="fa fa-archive ispace"></i>Developers</a></li>
     
      
    </ul>
    </div>
</nav>
</div>
</div>


<div class="row log">
<div class="col-sm-10">
<div class=""><h3 style="text-align:center;">Online Compiler</h3></div>
</div>

<div class="col-sm-1">

</div>

<div class="col-sm-1">
  
</div>

</div>




<div class="row cspace">
<div class="col-sm-8">
<div class="form-group">
<form action="compile.php" name="f2" method="POST" enctype="multipart/form-data">
<label for="language">Choose Language</label>
<select class="form-control" name="language">
<option value="c">C</option>
<option value="cpp">C++</option>
</select><br><br>

<label for="format">Choose file format</label>
<select class="form-control" name="format">
<option value="single">Single file</option>
<option value="Multi">Multi file</option>
<option value="Multi_with_makefile">Multi with makefile</option>
</select><br><br>





<label for="data">Upload File</label>
<input type="file" id="upload" name="upload"><br><br>


<input type="submit" class="btn btn-success" value="Run Code"><br><br><br>


</form>


</div>
</div>


</div>
</div>
<br><br><br>
<div class="area">
<div class="well foot">
<div class="row area">
<div class="col-sm-3">
<!-- BEGIN: Powered by Supercounters.com -->
<center><script type="text/javascript" src="http://widget.supercounters.com/online_i.js"></script><script type="text/javascript">sc_online_i(1360839,"ffffff","e61c1c");</script><br><noscript><a href="http://www.supercounters.com/">Free Online Counter</a></noscript>
</center>
<!-- END: Powered by Supercounters.com -->

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


