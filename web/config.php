<?php
require_once('../vendor/stripe/lib/Stripe.php');

$stripe = array(
  "secret_key"      => "sk_test_ADD_YOUR_KEY_HERE",
  "publishable_key" => "pk_test_ADD_YOUR_KEY_HERE"
);

Stripe::setApiKey($stripe['secret_key']);