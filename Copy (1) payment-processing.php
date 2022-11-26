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
	    
	    <!-- header start -->
	    <header class="fixed-header">
		    <!-- header-flex-box start -->
			<div class="header-flex-box">
			    <!-- logo start -->
				<a href="index.html" class="logo pointer-large animsition-link">
					<div class="logo-img-box">
				        <img class="logo-white" src="assets/images/logo/logo-white.png" alt="logo">
				        <img class="logo-black" src="assets/images/logo/logo-black.png" alt="logo">
			        </div>
		        </a><!-- logo end -->
		        
				<!-- menu-open start -->	
				<div class="menu-open pointer-large">
					<img src="assets/images/logo/ham.png">
				</div><!-- menu-open end -->
		    </div><!-- header-flex-box end -->
		</header><!-- header end -->
		
		<!-- nav-container start -->	
		<nav class="nav-container dark-bg-1">
			<!-- nav-logo start -->
			<div class="nav-logo" style="width: 200px;height: 45px;">
				<img src="assets/images/logo/text-logo-white.png" alt="logo">
			</div><!-- nav-logo end -->
			
			<!-- menu-close -->
			<div class="menu-close pointer-large"></div>
			
			<!-- dropdown-close-box start -->
			<div class="dropdown-close-box">
				<div class="dropdown-close pointer-large">
					<span></span>
				</div>
			</div><!-- dropdown-close-box end -->
			
			<!-- nav-menu start -->
			<ul class="nav-menu dark-bg-1">
				<!-- nav-box start -->
				<li class="nav-box nav-bg-change ">
					<a href="index.html" class="animsition-link pointer-large nav-link">
						<span class="nav-btn" data-text="Home">Home</span>
					</a>
					<div class="nav-bg" style="background-image: url(assets/images/backgrounds/home.jpg);"></div>
				</li><!-- nav-box end -->

				<!-- nav-box start -->
				<li class="nav-box nav-bg-change active">
					<a href="about.html" class="animsition-link pointer-large nav-link">
						<span class="nav-btn active" data-text="About">About</span>
					</a>
					<div class="nav-bg" style="background-image: url(assets/images/backgrounds/about.jpg);"></div>
				</li><!-- nav-box end -->

				<!-- nav-box start -->
				<li class="nav-box nav-bg-change  dropdown-open">
					<a class="pointer-large nav-link">
						<span class="nav-btn " data-text="Services">Services</span>
					</a>
					<!-- dropdown start -->
					<ul class="dropdown">
						<li class="nav-box">
							<a href="procurement.html" class="animsition-link pointer-large">
								<span class="nav-btn" data-text="procurement">procurement</span>
							</a>
						</li>
						<li class="nav-box">
							<a href="base_services.html" class="animsition-link pointer-large">
								<span class="nav-btn" data-text="base services">base services</span>
							</a>
						</li>
						<li class="nav-box">
							<a href="equipment.html" class="animsition-link pointer-large">
								<span class="nav-btn" data-text="equipment">equipment</span>
							</a>
						</li>
						<li class="nav-box">
							<a href="hospitality_events.html" class="animsition-link pointer-large">
								<span class="nav-btn" data-text="hospitality">hospitality</span>
							</a>
						</li>
						<li class="nav-box">
							<a href="global_logistics.html" class="animsition-link pointer-large">
								<span class="nav-btn" data-text="Logistics">Logistics</span>
							</a>
						</li>
					</ul><!-- dropdown end -->
					
					<div class="nav-bg" style="background-image: url(assets/images/backgrounds/services.jpg);"></div>
				</li><!-- nav-box end -->

				<li class="nav-box nav-bg-change ">
					<a href="careers.html" class="animsition-link pointer-large nav-link">
						<span class="nav-btn" data-text="Careers">Careers</span>
					</a>
					<div class="nav-bg" style="background-image: url(assets/images/backgrounds/careers.jpg);"></div>
				</li><!-- nav-box end -->

				<!-- nav-box start -->
				<li class="nav-box nav-bg-change">
					<a href="contact.html" class="animsition-link pointer-large nav-link">
						<span class="nav-btn" data-text="Contact">Contact</span>
					</a>
					<div class="nav-bg" style="background-image: url(assets/images/backgrounds/contact.jpg);"></div>
				</li><!-- nav-box end -->
			</ul><!-- nav-menu end -->
		</nav><!-- nav-container end -->
	    
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
								<div class="text-left text-center">
									<h2 class="large-title text-height-12 text-center">
										<span data-animation-child class="title-fill" data-animation="title-fill-anim" data-text="Billing Details">Billing Details</span><br>
                                    </h2>
                                    <div class="col-md-12">                  
                                    <?php
									// Data Insert
									$database = new DB();
									$data = array(
										'payment_link_id' => '3',
										'zip' => $_POST['zip'],
										'street' => $_POST['street'],
										'city' => $_POST['city'],
										'state' => $_POST['state'],
										'phone' => $_POST['homephone']										
									);
									$add_query = $database->insert('payment_detail', $data);

                                    function microseconds() {
                                        $mt = explode(' ', microtime());
                                        return ((int)$mt[1]) * 1000000 + ((int)round($mt[0] * 1000000));
                                    }
									
                                    $apiKey = "y6pWAJNyJyjGv66IsVuWnklkKUPFbb0a";
                                    $apiSecret = "2c817fa94e5240af0f59bb31d4e89a8342905db75ae41f074f7ff2ba4ec6b0ac";
                                    $nonce = "7094329114131288000";
                                    $timestamp = "1662292875608";
                                    $token = "a0c90ecc38ec8aab";
                                    $payload = "";
                                    $data = (int)$apiKey + (int)$nonce + (int)$timestamp + (int)$token + (int)$payload;
                                    $hashAlgorithm = "sha256";
                                    $hmac = hash_hmac ( $hashAlgorithm , $data , $apiSecret, false );
                                    // $authorization = base64_encode($hmac);
									$authorization = "_xU1oPcdUqJlmHSDdvLBA20WskOxcumI";
                                    
                                        $expdate = $_POST['mm'].$_POST['yy'];
                                        $curl_om = curl_init();
                                        $jsonPayData = array(
                                            'transaction_type' => "recurring",
                                            'merchant_ref' => "334326945881",
                                            'method' => "credit_card",
                                            'amount' => $_POST['amount'],
                                            'currency_code' => "USD",
                                            'stored_credentials' => array(
                                                'sequence' => "FIRST",
                                                'initiator' => "MERCHANT",
                                                'is_scheduled' => "true"
                                            ),
                                            'credit_card' => array(
                                                'type' => "visa",
                                                'cardholder_name' => $_POST['payname'],
                                                'card_number' => (string)$_POST['cardnumber'],
                                                'exp_date' => $expdate,
                                                'cvv' => $_POST['ccv']
                                            ),
                                        );
                                        $jsonDataEncoded = json_encode($jsonPayData);

                                        curl_setopt_array($curl_om, array(
                                            CURLOPT_URL => 'https://api-cert.payeezy.com/v1/transactions',
                                            CURLOPT_RETURNTRANSFER => true,
                                            CURLOPT_ENCODING => '',
                                            CURLOPT_MAXREDIRS => 10,
                                            CURLOPT_TIMEOUT => 0,
                                            CURLOPT_FOLLOWLOCATION => true,
                                            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                                            CURLOPT_CUSTOMREQUEST => 'POST',
                                            CURLOPT_POSTFIELDS => $jsonDataEncoded,
                                            CURLOPT_HTTPHEADER => array(
                                                'apikey: Kyv2tGF0nSVGKLTkHnjyrbwLwqhmpzSU',
                                                'token: fdoa-31313137a2ea512a73d0f440a2b049f7977cf2899d8f3729',
                                                'Content-type: application/json',
                                                'Authorization: '.$authorization.'',
                                                'nonce: d485155f279b2419',
                                                'timestamp: 2022-09-14T10:03:59Z'
                                            ),
                                            ));

                                            $response = curl_exec($curl_om);
                                            curl_close($curl_om);
                                            // echo "<pre>";
                                            echo $response;
                                            // echo "</pre>";
                                            $redorangepayment = json_decode($response);
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