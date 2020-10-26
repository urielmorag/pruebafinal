<a href="index.php">Inicio</a><br>

<?php


//----
echo "<br><strong>Pirámide Descendente</strong><br>";
for ($i = 1; $i < 7; $i++) {
	for ($j = 1; $j <= $i; $j++) {
	echo $j.",";
	}
	echo"<br>";
}

//-----
echo "<br><strong>Pirámide Invertida</strong><br>";
for ($i = 6; $i > 0; $i--) {
	for ($j = 1; $j <= $i; $j++) {
	echo $j.",";
	}
	echo"<br>";
}

//------
echo "<br><strong>Calendario</strong><br>";
for ($i = 1; $i < 13; $i++) {
	if($i==1){
		echo "<br>Enero ";
		for ($j = 1; $j < 32; $j++) {
			echo $j.", ";
			}
			echo"<br>";
	}
	if($i==2){
		echo "<br>Febrero ";
		for ($j = 1; $j < 29; $j++) {
			echo $j.", ";
			}
			echo"<br>";
	}
	if($i==3){
		echo "<br>Marzo ";
		for ($j = 1; $j < 32; $j++) {
			echo $j.", ";
			}
			echo"<br>";
	}
	if($i==4){
		echo "<br>Abril ";
		for ($j = 1; $j < 31; $j++) {
			echo $j.", ";
			}
			echo"<br>";
	}
	if($i==5){
		echo "<br>Mayo ";
		for ($j = 1; $j < 32; $j++) {
			echo $j.", ";
			}
			echo"<br>";
	}
	if($i==6){
		echo "<br>Junio ";
		for ($j = 1; $j < 31; $j++) {
			echo $j.", ";
			}
			echo"<br>";
	}
	if($i==7){
		echo "<br>Julio ";
		for ($j = 1; $j < 32; $j++) {
			echo $j.", ";
			}
			echo"<br>";
	}
	if($i==8){
		echo "<br>Agosto ";
		for ($j = 1; $j < 32; $j++) {
			echo $j.", ";
			}
			echo"<br>";
	}
	if($i==9){
		echo "<br>Septiembre ";
		for ($j = 1; $j < 31; $j++) {
			echo $j.", ";
			}
			echo"<br>";
	}
	if($i==10){
		echo "<br>Octubre ";
		for ($j = 1; $j < 32; $j++) {
			echo $j.", ";
			}
			echo"<br>";
	}
	if($i==11){
		echo "<br>Noviembre ";
		for ($j = 1; $j < 31; $j++) {
			echo $j.", ";
			}
			echo"<br>";
	}
	if($i==12){
		echo "<br>Diciembre ";
		for ($j = 1; $j < 32; $j++) {
			echo $j.", ";
			}
			echo"<br>";
	}

	
	
}

//---
echo "<br><strong>Pirámide Dinámica</strong><br>";
$k=10;
for ($i = 1; $i < $k; $i++) {
	for ($j = 1; $j <= $k-$i; $j++) {
	echo "=";
	}
	for ($l=$i; $l>0; $l--){
		echo $l;
		
	}

	for($r=2; $r<=$i; $r++){
		echo $r;
	}
	
	for ($j = 1; $j <= $k-$i; $j++) {
	echo "=";
	}
	echo"<br>";
	
}

//---
echo "<br><strong>Rombo</strong><br>";
$k=10;
for ($i = 1; $i < $k; $i++) {
	for ($j = 1; $j <= $k-$i; $j++) {
	echo "=";
	}
	for ($l=$i; $l>0; $l--){
		echo $l;
		
	}

	for($r=2; $r<=$i; $r++){
		echo $r;
	}
	
	for ($j = 1; $j <= $k-$i; $j++) {
	echo "=";
	}
	echo"<br>";

	
}
$m=1;
for($i=9; $i>=$m; $i--){
	for($j=1; $j<=10-$i; $j++){
		echo "=";
	}
	for($l=$i; $l>0; $l--){
		echo $l;
	}
	for($r=2; $r<=$i; $r++){
		echo $r;
	}
	for($j=1; $j<=10-$i; $j++){
		echo "=";
	}

	echo "<br>";
}


?>