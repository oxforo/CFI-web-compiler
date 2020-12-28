<?php

	## Edit to target complier
	$CC="g++";

	
	$tmpsrc_file = $_FILES['upload']['tmp_name'];
	$pre_path = "/opt/lampp/htdocs/Online-Compiler/rcfi/"; 

	$src_file = $_FILES['upload']['name'];
	$dst_file="result";
	$err_file="error.txt";
	$zip_file = "rcfi.zip";

	$src_path = $pre_path.$src_file;
	$dst_path = $pre_path.$dst_file;
	$zip_path = "/opt/lampp/htdocs/Online-Compiler/".$zip_file;

 	exec("chmod 777 $tmpsrc_file");
 	exec("chmod 777 $pre_path");
 	exec("chmod 777 $src_file");
 	exec("chmod 777 $src_path");
 	exec("chmod 777 $dst_path");

	mkdir('./rcfi/',0777,true);
	exec("cp $tmpsrc_file $src_path");


	$command = $CC." ".$src_path." -o ".$dst_path;
	$command_err=$command." 2>".$err_file;
	shell_exec($command_err);
	shell_exec($command);

	$error=file_get_contents($err_file);
	if( $error !=""){
		echo "<pre> $error </pre>";
	}
	else{

 	exec("zip -r $zip_file ./rcfi/*");

	$file_name= $zip_file;
	$dir = $zip_path;

	Header("Content-Type: application/zip");
	Header("Content-Disposition: attachment;; filename=$file_name");
	Header("Content-Transfer-Encoding: binary");
	Header("Content-Length: ".(string)(filesize($dir)));
	Header("Cache-Control: cache, must-revalidate");
	Header("Pragma: no-cache");
	Header("Expires: 0");
	ob_clean();
	flush();
	readfile($dir);	

	}

	exec("rm -r $pre_path");
	exec("rm ./rcfi.zip");
	exec("rm ./rcfi");
	exec("rm error.txt");



?>
