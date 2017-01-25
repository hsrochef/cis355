<script>
document.write("Helllllo.</br>");


</script>

<?php
	echo "<strong>Hello \"world\" \\. <br/></strong> Goodbye.</br></br>";
	
	
	$a = 1;
	$b = 1.5;
	$c = "Hello";
	$d = false;
	$e = array(1,2,3,4,5);
//	$f = {hello: "hi", world: "world"};
	$g = null;
	echo "</br>";
	echo "a + b equals " . ($a + $b);
		echo "</br>";

	echo "b + c equals " . ($c[2]);
	echo "</br>";
	$digits = "1111111";
	echo "</br>";
	$sum = 0;
	for($i = 0; $i < strlen($digits); $i++){
		$sum = ($sum + $digits[$i]);
	}
	echo "</br>";
	echo $sum;
	

?>