<?php
$amount = 100; 
$vat = 0.15; // VAT rate is 15%

$vat = $amount * $vat;
$total_amount = $amount + $vat;

echo "Amount: " . $amount;
echo "<br>";
echo "VAT: " . $vat;
echo "<br>";
echo "Total Amount: " . $total_amount . "\n";
?>