<html>
<head>
<title>Agregar</title><!--titulo de la pagina AGREGAR-->
<style>
		
		 body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f0f0f0;
    }
    .container {
        width: 400px;
        height: 300px;
		margin: 100px auto;
        background-color: #D7FAFE;
        border: 1px solid #ccc;
        padding: 20px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    .buttons button {
        margin: 5px;
        padding: 10px 20px;
        font-size: 16px;
        cursor: pointer;
		 background-color: #007bff;
        color: #fff;
        border: none;
    }
</style> 
	<meta charset="UTF=8">
</head>
<body background="fondo2.jpg">
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="easygame";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn)
{
die("connection failed:".mysqli_connect_error());
}

$nombre=$_GET["nom"];

$costo=$_GET["presio"];

$Empresa=$_GET["em"];

$clasificacion=$_GET["clas"];

$sql= "INSERT INTO productos(nombre,costo,Empresa,clasificacion) VALUES ('$nombre','$costo','$Empresa','$clasificacion')";
if (mysqli_query($conn, $sql))
{



}
else{

echo"error".$sql.$conn->error;

}
$conn->close();

?>
<div class="container">
	<center>
		<P>FIN DEL REGRISTO DESEA REGRESAR</P>
		<div class="buttons">
		<form action="agregar3.html" method="get">
		<button class="return-button" onclick="window.location.href = 'agregar3.html';">Regresar</button> 
	</form>
			</div>
		</center>
		
	</div>
	</body>
	</html>