<?php
// create short variable names
$tireqty = $_POST['tireqty'];
$oilqty = $_POST['oilqty'];
$sparkqty = $_POST['sparkqty'];
$address = $_POST['address'];
$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];//这个就是你网站的根目录
$date = date('H:i, jS F Y');//02:46, 4th March 2016
?>
<html>
<head>
    <title>Bob's Auto Parts - Order Results</title>
</head>
<body>
<h1>Bob's Auto Parts</h1>
<h2>Order Results</h2>
<?php

echo "<p>Order processed at ".date('H:i, jS F Y')."</p>";

echo "<p>Your order is as follows: </p>";

$totalqty = 0;
$totalqty = $tireqty + $oilqty + $sparkqty;
echo "Items ordered: ".$totalqty."<br />";


if ($totalqty == 0) {

    echo "You did not order anything on the previous page!<br />";

} else {

    if ($tireqty > 0) {
        echo $tireqty." tires<br />";
    }

    if ($oilqty > 0) {
        echo $oilqty." bottles of oil<br />";
    }

    if ($sparkqty > 0) {
        echo $sparkqty." spark plugs<br />";
    }
}


$totalamount = 0.00;

define('TIREPRICE', 100);
define('OILPRICE', 10);
define('SPARKPRICE', 4);

$totalamount = $tireqty * TIREPRICE
    + $oilqty * OILPRICE
    + $sparkqty * SPARKPRICE;

$totalamount=number_format($totalamount, 2, '.', ' ');

echo "<p>Total of order is $".$totalamount."</p>";
echo "<p>Address to ship to is ".$address."</p>";
echo $DOCUMENT_ROOT."/orders/orders.txt";
$outputstring = $date."\t".$tireqty." tires \t".$oilqty." oil\t"
    .$sparkqty." spark plugs\t\$".$totalamount
    ."\t". $address."\n";



// open file for appending
@ $fp = fopen("$DOCUMENT_ROOT/test02/orders.txt", 'ab');

 flock($fp, LOCK_EX);//存在的原因,例如一件商品,多个人购买

if (!$fp) {
    echo "<p><strong> Your order could not be processed at this time.
		    Please try again later.</strong></p></body></html>";
    exit;
}

fwrite($fp, $outputstring, strlen($outputstring));
flock($fp, LOCK_UN);
fclose($fp);//关闭任务

echo "<p>Order written.</p>";
?>
</body>
</html>
