<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Enviar con Ajax</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
</head>
<body>

<script>
	function enviar(){
	var codigo=document.getElementById('nombre').value;
	var nombre=document.getElementById('contrasena').value;
	
	var dataen = '&nombre='+nombre+ '&contrasena='+contrasena;

	$.ajax({
		type:'post',
		url:'post.php',
		data:dataen,
		success:function(resp){
			$("#respa").html(resp);
		}
	});
	return false;
}
</script>
<form method="post" onsubmit="return enviar();">
			<h1>post con javascript</h1>
			
			<input type="text" name="nombre" id="nombre">
			<input type="text" name="contrasena" id="contrasena">
			
			<input type="submit" value="Enviar">
			
		</form>
		<p id="respa"></p>
</body>
</html>