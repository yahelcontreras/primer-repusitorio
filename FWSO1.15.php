<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php
$Compra=rand(500,10000);
$IVA=($Compra/100)*15;
$CompraTotal=$Compra+$IVA;

if ($CompraTotal<1000) {
	$Descuento=($CompraTotal/100)*5;
	$CompraConDesc=$CompraTotal-$Descuento;
	echo "Su total con descuento es: ".$CompraConDesc;
}



?>
</body>
</html>