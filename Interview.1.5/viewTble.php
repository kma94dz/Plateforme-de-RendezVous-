<?php
$con=mysqli_connect("localhost","root","","rdv_medecin");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM patient");

echo "<table border='1'>

<tr>
<th>ID</th>
<th>Nom</th>
<th>Prenom</th>
<th>RDV</th>
<th>Heure</th>
<th>typeDeSoin</th>


</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['nom'] . "</td>";
echo "<td>" . $row['prenom'] . "</td>";
echo "<td>" . $row['rdv'] . "</td>";
echo "<td>" . $row['heure'] . "</td>";
echo "<td>" . $row['typeDeSoin'] . "</td>";

echo "</tr>";
}
echo "</table>";

mysqli_close($con);


?>
<a href="http://localhost/garreRoutiere/Main-page.php">
Retour
</a>
