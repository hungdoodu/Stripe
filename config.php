<?php
require_once('stripeLibrary/Stripe.php');

$stripe = array(
  "secret_key"      => "sk_test_VCF7xhxPCh6qynuXw0JyXzlC",
  "publishable_key" => "pk_test_AxvvOLZPIU3ChfVYVUJFosgJ"
);

Stripe::setApiKey($stripe['secret_key']);
?>