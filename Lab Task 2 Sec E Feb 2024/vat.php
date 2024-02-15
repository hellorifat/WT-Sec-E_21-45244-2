<?php

$pprice = 578;
echo "Product Price is: TK.$pprice (excl. vat)<br>";
$pvat = 15;
echo "Percentage of Vat: $pvat% <br>";
$ptotal =  $pprice+($pprice*$pvat/100);
echo "Price (incl. vat): $ptotal <br>";

?>