<?php 
	require_once( 'config/db-config.php' );
	require_once( 'config/class.db.php' );
?>
<!DOCTYPE html>
<html lang="en">
    <base href=""/>
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>red|orange</title>		
		<link rel="shortcut icon" href="assets/images/logo/icon.png">

		<!-- fonts -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7COswald:300,400,500,600,700" rel="stylesheet" type="text/css">
		
		<!-- styles	
    <link href="assets/css/plugins.css" rel="stylesheet" type="text/css">
	<link href="assets/css/style.css" rel="stylesheet" type="text/css"> -->
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
									<img class="top-bottom-padding-20" src="assets/images/logo/text-logo-white.png" alt="logo" style="width: 200px;">
								</div>
								<div class="text-left">
									<h2 class="large-title text-height-12 text-center">
										<span data-animation-child class="title-fill" data-animation="title-fill-anim" data-text="Billing Details">Billing Details</span><br>
                  					</h2>
                                    <div class="col-md-12">                  
									<?php

										$expDate=$_POST["mm"];
										$expDate.=substr($_POST["yy"],-2);

										$cardDetails =array(
											'type'=>$_POST['cardtype'],
											'cardholder_name'=> $_POST['payname'],
											'card_number'=> $_POST['cardnumber'],
											'exp_date'=> $expDate,
											'cvv'=> $_POST['cvv']
										);

										$arr=array(											 																							
												'transaction_type'=> 'authorize',
												'method'=> 'credit_card',
												'amount'=> $_POST['amount'],
												'currency_code'=> 'USD',
												'credit_card'=> $cardDetails
										);

										$apiKey = "Kyv2tGF0nSVGKLTkHnjyrbwLwqhmpzSU";
										$apiSecret = "2c817fa94e5240af0f59bb31d4e89a8342905db75ae41f074f7ff2ba4ec6b0ac";
										$nonce = getrandmax();
										$nonce .= getrandmax();

										list($msec, $sec) = explode(' ', microtime());

										$timestamp =  (int) ($sec.substr($msec, 2, 3));

										// $nonce="5150169811082342000";
										// $timestamp="1669746763368";

										$token = "fdoa-25fb9b0b7a498aa19e5816d50d15d0a1c885971a73c27f9d";
										$payload = json_encode($arr);

										$data = $apiKey;
										$data.= $nonce;
										$data.= $timestamp; 
										$data.= $token;
										$data.= $payload;

										$hashAlgorithm = "sha256";

										$hmac = hash_hmac ( $hashAlgorithm , $data , $apiSecret, false );
										
										$authorization = base64_encode($hmac);

										//$authorization ="OWVhOGIyZDkwZDhmYjc2YzRmYjVkODVhNjZlODY5NmIwNmZlM2Y1YTEwZmMwZjM2N2UwMzAyOGNhYmE1YjNmYQ";

										$auth=array(
											'apikey: '.$apiKey,
											'nonce: '.$nonce,
											'timestamp: '.$timestamp,
											'token: '.$token,
											'Authorization: '.$authorization
										);

										echo implode(" ",$auth);
												
										// $curl = curl_init();

										// curl_setopt_array($curl, array(
										// CURLOPT_URL => 'https://api-cert.payeezy.com/v1/transactions',
										// CURLOPT_RETURNTRANSFER => true,
										// CURLOPT_ENCODING => '',
										// CURLOPT_MAXREDIRS => 10,
										// CURLOPT_TIMEOUT => 0,
										// CURLOPT_FOLLOWLOCATION => true,
										// CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
										// CURLOPT_CUSTOMREQUEST => 'POST',
										// CURLOPT_POSTFIELDS =>json_encode( $arr ),
										// CURLOPT_HTTPHEADER =>$auth,
										// ));

										// $response = curl_exec($curl);

										// curl_close($curl);
										// echo $response;




										$curl = curl_init();

										curl_setopt_array($curl, array(
										CURLOPT_URL => 'https://api-cert.payeezy.com/v1/transactions',
										CURLOPT_RETURNTRANSFER => true,
										CURLOPT_ENCODING => '',
										CURLOPT_MAXREDIRS => 10,
										CURLOPT_TIMEOUT => 0,
										CURLOPT_FOLLOWLOCATION => true,
										CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
										CURLOPT_CUSTOMREQUEST => 'POST',
										CURLOPT_POSTFIELDS =>'{
										"transaction_type": "authorize",
										"method": "credit_card",
										"amount": "1299",
										"currency_code": "USD",
										"credit_card": {
											"type": "visa",
											"cardholder_name": "John Smith",
											"card_number": "4788250000028291",
											"exp_date": "0425",
											"cvv": "123"
										}
										}',
										CURLOPT_HTTPHEADER =>$auth,
										// CURLOPT_HTTPHEADER => array(
											
										// 	'apikey: Kyv2tGF0nSVGKLTkHnjyrbwLwqhmpzSU',
										// 	'token: fdoa-25fb9b0b7a498aa19e5816d50d15d0a1c885971a73c27f9d',
										// 	'Authorization: MmE3YWU0NzZiMGFhZmRjNTFkYzM3ZTFhMWM0OTJjMmFhNWNiOWU4ZDI0MDVhMTExYjY4ZWU1ZjExMWM5MTkyMA==',
										// 	'nonce: 1158933895056174600',
										// 	'timestamp: 1669830956012'
											
										// ),
										));

										$response = curl_exec($curl);

										curl_close($curl);
										//echo $response;



										$redorangepayment = json_decode($response,true) ;
										if ($redorangepayment['validation_status'] == "success"){

											echo '<div class="alert alert-success" role="alert">';
											echo "<p><strong>Thank For Payment</strong></p>";
											echo "<p><strong>Payment Status</strong>: ".$redorangepayment['validation_status']."</p>";
											echo "<p><strong>Transaction ID</strong>: ".$redorangepayment['transaction_id']."</p>";
											echo "</div>";
										} else {
											echo '<div class="alert alert-danger" role="alert">';
											echo "<p><strong>Payment Status</strong>: Payment Failed</p>";
											echo $response;
											// echo "<p><strong>Payment Status</strong>: ".$redorangepayment['Error']['messages']['code']."</p>";
											// echo "<p><strong>Transaction ID</strong>: ".$redorangepayment['transaction_id']."</p>";
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