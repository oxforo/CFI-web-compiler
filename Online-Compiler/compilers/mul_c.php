<?php

	## Edit to target complier
	$CC="gcc";

	
	$tmpsrc_file = $_FILES['upload']['tmp_name'];
	$pre_path = "/opt/lampp/htdocs/Online-Compiler/rcfi/"; 

	$src_file = $_FILES['upload']['name'];
	$dst_file="result";
	$err_file="error.txt";
	$c_file = "cfile.txt";
	$zip_file = "rcfi.zip";

	$src_folder = substr($src_file,0,-4);

	$src_path = $pre_path.$src_file;
	$dst_path = $pre_path.$dst_file;
	$file_path = $pre_path.$src_folder;


	$zip_path = "/opt/lampp/htdocs/Online-Compiler/".$zip_file;

 	exec("chmod 777 $tmpsrc_file");
 	exec("chmod 777 $pre_path");
 	exec("chmod 777 $src_file");
 	exec("chmod 777 $src_path");
 	exec("chmod 777 $dst_path");

	mkdir('./rcfi/',0777,true);
	exec("cp $tmpsrc_file $src_path");

	$unzipcommand = "unzip $src_path -d ./rcfi";
	shell_exec($unzipcommand);

	$c_catchcommand = "ls $file_path | grep '.*[.]c' > ".$c_file;
	exec($c_catchcommand);
	

	$cfiles = file_get_contents($c_file);
	$cfiles = preg_replace('/\r\n|\r|\n/',' ',$cfiles); 

	echo "<pre>$file_path</pre>";

/////
	$command ="cd $file_path && ".$CC." -o ".$dst_file." ".$cfiles;
	$command_err=$command." 2>".$err_file;
	shell_exec($command_err);
	shell_exec($command);


	$error=file_get_contents($err_file);
	if( $error !=""){
		echo "<pre> $error </pre>";
	}
	else{
	exec("cd $file_path && rm error.txt");


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
	exec("rm $c_file");
	exec("rm -r $pre_path");
	exec("rm ./rcfi.zip");










/*
	if($fp = fopen($c_file,'r')){
	
		$content = '';
		while( $line = fgets($fp,1024)){
			$line = preg_replace('/r|n/', '', $line);
			$content = $content." ".$line;
			echo "<pre>$content</pre>";
		}
	}
	else{
		echo "<pre> error!!!</pre>";		
	}
	
//	$file_list =file_get_contents($c_file);

	echo "<pre>$content</pre>";


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

*/

?>
