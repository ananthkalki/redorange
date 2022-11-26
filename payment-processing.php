<?php 
	require_once( 'config/db-config.php' );
	require_once( 'config/class.db.php' );
?>
<!DOCTYPE html>
<html lang="en">
    <base href="https://www.redorange.com/" />
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>red|orange</title>		
		<link rel="shortcut icon" href="assets/images/logo/icon.png">

		<!-- fonts -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7COswald:300,400,500,600,700" rel="stylesheet" type="text/css">
		
		<!-- styles -->	
    <link href="assets/css/plugins.css" rel="stylesheet" type="text/css">
	<link href="assets/css/style.css" rel="stylesheet" type="text/css">
	<script src="https://www.gstatic.com/firebasejs/7.17.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.17.1/firebase-database.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

	</head>
	<body class="loader">
		<!-- loading start -->
		<div class="loading">
		    <img class="logo-loading" src="assets/images/logo/logo-loader.png" alt="logo">
	    </div><!-- loading end -->
	    
		<!-- pointer start -->
		<div class="pointer" id="pointer">
			<i class="fas fa-long-arrow-alt-right"></i>
			<i class="fas fa-search"></i>
			<i class="fas fa-link"></i>
		</div><!-- pointer end -->
		
		<!-- to-top-btn start -->
		<a class="to-top-btn pointer-small" href="#up">
			  <span class="to-top-arrow"></span>		    
		</a><!-- to-top-btn end -->
	    
		<!-- animsition-overlay start -->
		<main class="animsition-overlay" data-animsition-overlay="true">
			<!-- page-head start -->
			<section id="down" class="light-bg-1 flex-min-height-box">
				<!-- flex-min-height-inner start -->
				<div class="flex-min-height-inner">
					<!-- container start -->
					<div class="container small top-bottom-padding-120">
						<!-- flex-container start -->
						<div data-animation-container class="flex-container">
							<!-- column start -->
							<div class="twelve-columns">
								<div class="text-center">
									<img class="top-bottom-padding-20" src="https://www.redorange.com/assets/images/logo/text-logo-white.png" alt="logo" style="width: 200px;">
								</div>
								<div class="text-left">
									<h2 class="large-title text-height-12 text-center">
										<span data-animation-child class="title-fill" data-animation="title-fill-anim" data-text="Billing Details">Billing Details</span><br>
                  					</h2>
                                    <div class="col-md-12">                  
                                    <?php

										// $apiKey = "y6pWAJNyJyjGv66IsVuWnklkKUPFbb0a";
										// $apiSecret = "2c817fa94e5240af0f59bb31d4e89a8342905db75ae41f074f7ff2ba4ec6b0ac";
										// $nonce = "7094329114131288000";

										$serviceURL = 'https://api-cert.payeezy.com/v1';
										$apikey = 'zAlVCVmGlA4TTvU8M6QQkZ0M4ol6ldws';
										$token = 'c5a93da7fbbdd520';
										$apisecret = '3361148989e27c2d690a2f5683f3865041db3e657431b8bd6a647afe13bc2065';
										$hmac_enc = 'p5RgB7u~q03hok3t8t8kSo3UQxM3~Grm';

										// $serviceURL = 'https://api-cert.payeezy.com/v1/transactions';
										// $apikey = 'y6pWAJNyJyjGv66IsVuWnklkKUPFbb0a';
										// $token = 'c5a93da7fbbdd520';
										// $apisecret = '3361148989e27c2d690a2f5683f3865041db3e657431b8bd6a647afe13bc2065';
										// $hmac_enc = 'p5RgB7u~q03hok3t8t8kSo3UQxM3~Grm';


										list($usec, $sec) = explode(" ", microtime());
										$timestamp = round(((float)$usec + (float)$sec) * 1000);
										$timestamp = $timestamp - 5000;
										$nonce = rand();

										echo 'Timestamp is: '. $timestamp."\n";

										$reqbody = file_get_contents('test.json', true);

										echo 'Request body: '.$reqbody."\n";

										$summarize = "";
										$summarize .= $apikey;
										$summarize .= $nonce;
										$summarize .= $timestamp;
										$summarize .= $token;
										$summarize .= $reqbody;


										// $hmac = hash_hmac('SHA256', $summarize, $apisecret);

										// echo "Hmac is: ".$hmac."\n";

										// $hmac_enc = base64_encode($hmac);




										$curl = curl_init($serviceURL);
										curl_setopt($curl, CURLOPT_HEADER, false);
										curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

										curl_setopt($curl, CURLOPT_POST, true);
										curl_setopt($curl, CURLOPT_POSTFIELDS, $reqbody);
										curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
										curl_setopt($curl, CURLOPT_VERBOSE, true);


										$headers = array(
											'Content-type: application/json',
											'token: fdoa-31313137a2ea512a73d0f440a2b049f7977cf2899d8f3729',
											"Authorization: ".$hmac_enc,
											"apikey: ".$apikey,
											"token: ".$token,
											"timestamp: ".$timestamp,
											"nonce: ".$nonce,
										);

										// 'apikey: Kyv2tGF0nSVGKLTkHnjyrbwLwqhmpzSU',
										//                                                 'token: fdoa-31313137a2ea512a73d0f440a2b049f7977cf2899d8f3729',
										//                                                 'Content-type: application/json',
										//                                                 'Authorization: '.$authorization.'',
										//                                                 'nonce: d485155f279b2419',
										//                                                 'timestamp: 2022-09-14T10:03:59Z' 


										curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

										$json_response = curl_exec($curl);

										$status = curl_getinfo($curl, CURLINFO_HTTP_CODE);

										// if ( $status != 201 ) {
										//     die("Error: call to URL $serviceURL failed with status $status, response $json_response, curl_error " . curl_error($curl) . ", curl_errno " . curl_errno($curl));
										// }


										curl_close($curl);
										$response = json_decode($json_response, true);
										// echo "Response is: ".$response."\n";
										echo "JSON response is: ".$json_response."\n";
										$redorangepayment = $response;
										if ($redorangepayment->validation_status == "success"){

											echo '<div class="alert alert-success" role="alert">';
											echo "<p><strong>Thank For Payment</strong></p>";
											echo "<p><strong>Payment Status</strong>: ".$redorangepayment->validation_status."</p>";
											echo "<p><strong>Transaction ID</strong>: ".$redorangepayment->transaction_id."</p>";
											echo "</div>";
										} else {
											echo '<div class="alert alert-danger" role="alert">';
											echo "<p><strong>Payment Status</strong>: Payment Failed</p>";
											// echo "<p><strong>Payment Status</strong>: ".$redorangepayment['Error']['messages']['code']."</p>";
											// echo "<p><strong>Transaction ID</strong>: ".$redorangepayment->transaction_id."</p>";
											echo "</div>";
										}
										?> 
                                    </div>                  								
								</div>
							</div><!-- column end -->
							<br><br>
							<!-- column start -->
						</div><!-- flex-container end -->
					</div><!-- container end -->
				</div><!-- flex-min-height-inner end -->
			</section><!-- flex-min-height-box end -->					
			</div><!-- light-bg-2 end -->
		</main><!-- animsition-overlay end -->
		
		<!-- footer start -->
		<footer class="footer dark-bg-1">
				<div class="twelve-columns top-bottom-padding-90">
					<p class="p-letter-style text-color-4 footer-copyright">&copy; Copyright 2020 red|orange.</p>
				</div><!-- column end -->
			</div><!-- flex-container end -->
		</footer><!-- footer end -->
		
		<!-- scripts --> 
        <script src="assets/js/plugins.js"></script> 
        <script src="assets/js/main.js"></script>
	</body>
</html>