 <?php
 $conn = oci_connect('UBANCO', 'Filosofo2', 'localhost:1521/orcl');
 
 IF (!$conn){
 	$m = oci_error();
	echo $m['message'], "n";
	exit;
}
?>