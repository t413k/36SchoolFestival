<?php
$file = "./number.php";
$fp = fopen ( $file,"r" );
$now = fgets ( $fp );
fclose ( $fp );
$now ++;
$fp = fopen ( $file, "w" );
fputs ( $fp, $now );
fclose ( $fp );
// "/test/index.php"は自分の環境に合わせる
header ( "Location: http://" . $_SERVER['HTTP_HOST'] . "/test/index.php" );
exit;
?>
<html>
<body>
<form action="count.php" method="get">
	<input type="submit" value="クリック！<?php readfile("./number.php") ?>">
</form>
</body>