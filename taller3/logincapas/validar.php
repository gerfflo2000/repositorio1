<?php

//validando usurio


$user=$_POST['usuario'];
$pass=$_POST['contra'];

 $conn = oci_connect('UBANCO', 'Filosofo2', 'localhost:1521/orcl');
 
 IF (!$conn){
 	$m = oci_error();
	echo $m['message'], "n";
	exit;
}

$stid =oci_parse($conn, 'begin :r := validar_usuario (:u); end;');

oci_bind_by_name($stid, ':u', $user);
oci_bind_by_name($stid, ':r', $result, 40);

oci_execute($stid);
if ($result== $pass){

	header('Location:menu.html');

}else{header('Location:banco.html');}


oci_free_statement($stid);
oci_close($conn);


?>