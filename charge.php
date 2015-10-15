<?php
  require_once('./config.php');
  $token  = $_POST['stripeToken'];
  $amount = $_POST['custom-donation-amount'];
  echo $amount;
  
  
  $charge = Stripe_Charge::create(array(
			"amount" => 5000,
			"currency" => "usd",
			"currency" => "usd",
			"card" => $token,
			"description" => 'test_hung_david@example.com')
		);

  
  echo '<h1>Successfully charged $50!</h1>';
?>