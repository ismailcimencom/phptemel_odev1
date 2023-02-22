<!DOCTYPE html>
<html>
<body>

<?php
function piramit($say){
$a = 0;
	while($a <= $say){
    
    	for($i = 0; $i <= $a ; $i++){
		echo "0";
    	}
    $a++;
    echo "<br>";
   }
}

piramit(10);

?>

</body>
</html>

