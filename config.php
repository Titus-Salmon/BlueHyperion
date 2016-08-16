

<?php
require_once('vendor/autoload.php');

$stripe = array(
  "secret_key"      => "sk_test_sjb9aTfvCz92mHcJiSYk80xJ",
  "publishable_key" => "pk_test_Sdta6uLGfK3oCSJeKaxZIuay"
);

\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>

