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
										<span data-animation-child class="title-fill" data-animation="title-fill-anim" data-text="Billing">Billing</span><br>
                  					</h2>

                  <!-- <form class="row g-3" method="post" action="https://test.ipg-online.com/connect/gateway/processing">					  
                            <legend>Test Payment Request Details</legend>
                            <div class="col-md-6">
                                <label for="storename" class="form-label">Store ID:</label>
                                <input type="text" name="storename" value="334326945881" class="form-control" readonly="readonly" />
							</div>
                            <div class="col-md-6">
                                <label for="timezone" class="form-label">Timezone:</label>
                                <input type="text" name="timezone" value="America/Los_Angeles" class="form-control" readonly="readonly"/>
								</div>
                            <div class="col-md-6">
                                <label for="transactiontype" class="form-label">Transaction Type:</label>
                                <input type="text" name="txntype" value="sale" class="form-control" readonly="readonly" />
								</div>
                            <div class="col-md-6">
                                <label for="chargetotal" class="form-label">Transaction Amount:</label>
                                <input type="text" name="chargetotal" value="512.00" class="form-control" readonly="readonly" />
								</div>
                            <div class="col-md-6">
                                <label for="currency" class="form-label">Currency (see ISO4217):</label>
                                <input type="text" name="currency" value="840" class="form-control"  readonly="readonly" />
								</div>
                            <div class="col-md-6">
                                <label for="txndatetime" class="form-label">Transaction DateTime:</label>
                                <input type="text" name="txndatetime" class="form-control" value="<?php echo getDateTime(); ?>"/>
								</div>
                            <div class="col-md-6">
                                <label for="hashExtended" class="form-label">Hash Extended:</label>
                                <input type="text" name="hashExtended" class="form-control" value="<?php echo createExtendedHash('512.00', '840'); ?>"  readonly="readonly" />
								</div>
                            <div class="col-md-6">
                                <label for="hashExtended" class="form-label">Hash Algorithm :</label>
                                <input type="text" name="hash_algorithm" class="form-control" value="HMACSHA256" readonly="readonly" />
								</div>
                            <div class="col-md-6">
                                <label for="hashExtended" class="form-label">Checkout option :</label>
                                <input type="text" name="checkoutoption" class="form-control" value="combinedpage" readonly="readonly" />
								</div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-success btn-flat btn-block">Submit Details</button>
							</div>
                    </form> -->
                    <?php

                    function getDateTime() {
                        return date("Y:m:d-H:i:s");
                    }

                    function createExtendedHash($chargetotal, $currency) {
                    // Please change the store Id to your individual Store ID
                    // NOTE: Please DO NOT hardcode the secret in that script. For example read it from a database.
                    $sharedSecret = "sharedsecret";
                    $separator = "|";
                    $storeId= "334326945881";
                    $timezone= "Europe/London";
                    $txntype= "sale";
                    $checkoutoption = "combinedpage";

                    $stringToHash = $chargetotal . $separator . $checkoutoption . $separator . $currency . $separator . "HMACSHA256" . $separator . $storeId . $separator . $timezone. $separator . date("Y:m:d-H:i:s") . $separator . $txntype;

                    $hash = base64_encode(hash_hmac('sha256', $stringToHash, $sharedSecret, true));
                    return $hash;
                    }

                    ?>
				<hr/>
						<?php 
							$database = new DB();
							$query = "SELECT * FROM payment_link WHERE id = '3'";
							$results = $database->get_results( $query );
							foreach( $results as $row )
							{
								$name = $row['name'];
								$purchase_order = $row['purchase_order'];
								$amount = $row['amount'];
							}
							// $payment_id = $_GET['payment_id'];
						?>
						<form class="row g-3" id="" method="post" action="https://20thsensebusiness.com/redorange/payment-processing.php">
								<input type="hidden" class="form-control" id="paymentid" value="">
								<div class="col-md-12">
									<label for="inputEmail4" class="form-label">Cardholder Name: (Please Print)</label>
									<input type="text" class="form-control" id="inputEmail4" value="<?php echo $name; ?>" name="payname" id="payname" readonly>
								</div>
								<div class="col-md-6">
									<label for="inputPassword4" class="form-label">Purchase Order#:</label>
									<input type="text" class="form-control" id="PurchaseOrder" value="<?php echo $purchase_order; ?>" disabled>
								</div>
								<div class="col-6">
									<label for="inputAmount" class="form-label">Amount Authorised to charge:</label>
									<input type="text" class="form-control" placeholder="0.00"  id="amount" name="amount" value="<?php echo $amount; ?>" readonly>
								</div>
								<h4>Card Holder Billing Address:</h4>
								<div class="col-12">
									<label for="inputAddress2" class="form-label">Street</label>
									<input type="text" class="form-control" id="street" placeholder="Street" name="street" required>
								</div>
								<div class="col-md-4">
									<label for="inputCity" class="form-label">City</label>
									<input type="text" class="form-control" id="city" name="city" required>
								</div>
								<div class="col-md-4">
									<label for="inputState" class="form-label">State</label>
									<input type="text" class="form-control" id="state" name="state" placeholder="State" required>
								</div>
								<div class="col-md-4">
									<label for="inputZip" class="form-label">Zip</label>
									<input type="text" class="form-control" id="zip" name="zip" pattern="[0-9]*" title="Zip Need to be Numeric/NUmber" required>
								</div>
								<div class="col-12">
									<label for="inputAddress2" class="form-label">Home Phone</label>
									<input type="text" class="form-control" id="homephone" name="homephone" placeholder="Home Phone">
								</div>
								<div class="col-md-6">
									<label for="inputZip" class="form-label">Card Number</label>
									<input type="text" class="form-control" id="cardnumber" name="cardnumber" placeholder="Card Number" pattern="\d{15}|\d{16}" maxlength='16' title="Card Number to be Numeric / NUmber" required>
								</div>
								<div class="col-md-2">
									<label for="inputZip" class="form-label">Exp. Month</label>
									<select class="form-control" name="mm" id="mm" required>
										<option value="01">01</option>
										<option value="02">02</option>
										<option value="03">03</option>
										<option value="04">04</option>
										<option value="05">05</option>
										<option value="06">06</option>
										<option value="07">07</option>
										<option value="08">08</option>
										<option value="09">09</option>
										<option value="10">10</option>
										<option value="11">11</option>
										<option value="12">12</option>
									</select>
								</div>
								<div class="col-md-2">
									<label for="inputZip" class="form-label">Exp. Year</label>
									<select class="form-control" name="yy" id="yy"  required>
										<?php $i = date('y'); for ($i = $i; $i <= 35; $i++ ) {  ?>
											<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
										<?php } ?>
									</select>
								</div>
								<div class="col-md-2">
									<label for="inputZip" class="form-label">Security Code</label>
									<input type="text" class="form-control" id="ccv" name="ccv" placeholder="Security Code" pattern="\d{3}|\d{4}" maxlength='4' required>
								</div>
								<p class="small">(This number is 3 digits & is the non – embossed number printed on the signature panel on the back of your card immediately following the card account number. This number is recorded as an additional security precaution).</p>
								<div class="col-md-12">
									<label for="inputZip" class="form-label">Type of Card: </label>
									<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="cardtype" id="cardtype" value="option1">
									<label class="form-check-label" for="inlineRadio1">Visa</label>
									</div>
									<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="cardtype" id="inlineRadio2cardtype" value="option2">
									<label class="form-check-label" for="inlineRadio2">Master Card</label>
									</div>
								</div>
								<div class="col-md-6">
									<label for="inputZip" class="form-label">Card Holders Signature</label>
									<input type="text" class="form-control" name="cardholdsign" id="cardholdsign" placeholder="Card Holders Signature">
								</div>
								<div class="col-md-6">
									<label for="inputZip" class="form-label">Date</label>
									<input type="text" class="form-control" id="date" name="date" placeholder="<?php echo date('d-m-Y'); ?>">
								</div>
								<p>Note: Copy of your Credit Card front & back is requested with your first use.</p>
								<div class="col-12">
									<button type="submit" class="btn btn-success btn-flat btn-block">Add Payment</button>
								</div>
								</form>									
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