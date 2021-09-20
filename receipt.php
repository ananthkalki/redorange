<!DOCTYPE html
   PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd" >
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<title>Receipt</title>
<script type="text/javascript" src="http://redorange.com/javascript.js" ></script>
<link rel="stylesheet" href="http://redorange.com/style.css" type="text/css" />
</head>
<body>
<h1>RO Payment Receipt</h1>

<h2>
<?php echo $_REQUEST['x_response_reason_text'] ?>
</h2>

<?php
 if ($_REQUEST['x_response_code'] == '1') {
   echo "<p>";
   echo "Your order was processed successfully. Here is your receipt.";
   echo "</p>";
   echo "<pre>";
   echo $_REQUEST["exact_ctr"];
   echo "</pre>";
   if (!empty($_REQUEST["exact_issname"])) {
     echo "<p>";
     echo "Issuer: " .$_REQUEST["exact_issname"] . "<br/>";
     echo "Confirmation Number: " . $_REQUEST["exact_issconf"];
     echo "</p>";
   }
   
 } elseif ($_REQUEST['x_response_code'] == '2') {
   echo "<p>";
   echo "Your payment failed.";
   echo "Here is your receipt.";
   echo "</p>";
   echo "<pre>";
   echo $_REQUEST["exact_ctr"];
   echo "</pre>";
 } else {
   echo "<p>";
   echo "An error occurred while processing your payment.";
   echo "Please try again later.";
   echo "</p>";
 }
?>
</body>
</html>


