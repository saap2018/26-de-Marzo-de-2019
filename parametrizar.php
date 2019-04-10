<?php
/*include('Login/config.php');
include('Login/session.php');
  
?>
<html> 
<body> 
  
<?php 
$link = mysqli_connect("localhost", "root"); 
mysqli_select_db("saap", $link); 
$result = mysql_query("SELECT cantidad FROM cantidaddeparqueaderos", $link); 
if ($row = mysql_fetch_array($result)){ 
   //echo "<table border = '1'> \n"; 
   //echo "<tr><td>Cantidad</td></tr> \n"; 
   //do { 
      echo $row["cantidad"]."<br>"; 
	  //echo "<tr><td>".$row["cantidad"]."</td></tr> \n"; 
   //} while ($row = mysql_fetch_array($result)); 
   //echo "</table> \n"; 
} else { 
echo "¡ No se ha encontrado ningún registro !"; 
} 
$limite = $row["cantidad"];
			//echo $limite;
			for($i = 1; $i <= $limite;$i++)
			{
				$cambiar = mysql_query("UPDATE disponibilidad SET Disponibilidad ='Activo' where IdLugar ='$i'", $link); 	
				//echo $cambiar;
				echo $i."</br>";
				//echo $row["cantidad"];
			}
			header("Location: Login/inicio.php");
?> 
  
</body> 
</html>*/
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "saap";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT cantidad FROM cantidaddeparqueaderos";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo $row["cantidad"]."<br>";
		$limite = $row["cantidad"];
    }
} else {
    echo "0 results";
}
//$limite = $row["cantidad"];
			echo $limite;
			for($i = 1; $i <= $limite;$i++)
			{
				$cambiar = "UPDATE disponibilidad SET Disponibilidad ='Activo' where IdLugar ='$i'";
				$update= mysqli_query($conn, $cambiar);	
				//echo $cambiar;
				echo "</br>".$i."</br>";
				
			}
			header("Location: Login/inicio.php");
mysqli_close($conn);
?>
