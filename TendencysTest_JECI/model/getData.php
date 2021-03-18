<?php 

	 	function httpGet_method(string $url){

			$ch = curl_init($url);  
		    curl_setopt($ch,CURLOPT_URL,$url);
		    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
		    $headers = array(
		    	"Accept: application/json",
   				"Authorization: eyJhbGciOiJIUzUxMiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJwUGFINU55VXRxTUkzMDZtajdZVHdHV3JIZE81cWxmaCIsImlhdCI6MTYwNTY0NDA0NzA1OH0.skfIY_7CAANkxmhoq37OI4jYRE8flx1ENq1v1VaRevJiroYNFQYz7Oy6hL1YZ1OJkevXSQFuLMHTqY0w6d5nPQ",
		     );
		 	curl_setopt($ch,CURLOPT_HTTPHEADER, $headers); 
		    $output = curl_exec($ch);
		    curl_close($ch);
		    return $output;
		}

		 $url = "https://eshop-deve.herokuapp.com/api/v2/orders";

		$data = httpGet_method($url);
		echo $data;
?>
