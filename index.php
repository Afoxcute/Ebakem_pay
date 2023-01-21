<?php

// Set the exchange rate (as of 2021, 1 US dollar is equal to about 480 Nigerian naira)
$exchange_rate = 480;

// Get the amount of dollars entered by the user
$amount_dollars = $_POST['amount'];

// Calculate the equivalent amount in naira
$amount_naira = $amount_dollars * $exchange_rate;

// Display the result to the user
echo "The equivalent amount in naira is: $amount_naira";

?>
