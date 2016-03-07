<?php
//create short variable name
$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
?>
<html>
<head>
    <title>Bob's Auto Parts - Customer Orders</title>
</head>
<body>
<h1>Bob's Auto Parts</h1>
<h2>Customer Orders</h2>
<?php

@$fp = fopen("$DOCUMENT_ROOT/test02/orders.txt", 'rb');

if (!$fp) {
    echo "<p><strong>No orders pending.
           Please try again later.</strong></p>";
    exit;
}
//feof 测试文件纸巾是否到了文件结束的位置
while (!feof($fp)) {
    $order= fgets($fp, 999);
    echo $order."<br />";
}

echo "Final position of the file pointer is ".(ftell($fp));
echo "<br />";
rewind($fp);
echo "After rewind, the position is ".(ftell($fp));
echo "<br />";

fclose($fp);

?>
</body>
</html>
