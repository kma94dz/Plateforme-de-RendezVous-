<!DOCTYPE html>

<?php 
include 'codes.php';?>

<script type="text/javascript">
var bool1 = "<?php echo $d1; ?>";
var bool2 = "<?php echo $d2; ?>";
var bool3 = "<?php echo $d3; ?>";
var heureT0 = <?php echo json_encode($array0); ?>;
var heureT1 = <?php echo json_encode($array1); ?>;
var heureT2 = <?php echo json_encode($array2); ?>;
var heureT3 = <?php echo json_encode($array3); ?>;

function setdates(){
setTimes(heureT0);
if(bool1==false){
document.getElementById("RDV").insertAdjacentHTML("beforeend", "<OPTION onclick='setTimes(heureT1)' id='opt2' value='01-03-2019'>01-03-2019");
}
if(bool2==false){
document.getElementById("RDV").insertAdjacentHTML("beforeend", "<OPTION onclick='setTimes(heureT2)' id='opt2' value='02-03-2019'>02-03-2019");
}
if(bool3==false){
document.getElementById("RDV").insertAdjacentHTML("beforeend", "<OPTION onclick='setTimes(heureT3)' id='opt2' value='03-03-2019'>03-03-2019");
}


/*
if(document.getElementById('RDV').value == "01-03-2019") {
     setTimes(heureT1);
}
if(document.getElementById('RDV').value == "02-03-2019") {
     setTimes(heureT2);
}
if(document.getElementById('RDV').value == "03-03-2019" ) {
     setTimes(heureT3);
}
*/

//--fin de la function
}

//-----------------------heures
function setTimes(T){
document.getElementById("htc").innerHTML="";
var tlen=0;
while(tlen<T.length-1){
document.getElementById("htc").insertAdjacentHTML("beforeend", "<OPTION value='"+T[tlen]+"'>"+T[tlen]);
tlen=tlen+1;

}
//--fin de la function
}
</script>


<html>
<head>
<title> Prendre rendez-vous</title>
<!-- for-mobile-apps -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="Bus Ticket Reservation Widget Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!-- //for-mobile-apps -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="css/jquery.seat-charts.css">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<script src="js/jquery-1.11.0.min.js"></script>
<script src="js/jquery.seat-charts.js"></script>

</head>
<body >
<div class="content">
	<h1>Etape 1</h1>
	<div class="main">
		

<!DOCTYPE html>
<html>


<head>
<style>
label{display:inline-block;width:100px;margin-bottom:10px;}
</style>


<title>Prendre Rendez-vous</title>
</head>
<body onload="setdates()">
<center>


<form method="post" name='prendreRDV' action="process_add_rdv.php" >
<label>Votre nom et prenom</label>
<INPUT type="text" name="NOM" required="" oninvalid="this.setCustomValidity('Nom et prenom non remplit')" oninput="setCustomValidity('')" placeholder="Entrez votre nom et prenom">
<br />

<label>Choisissez la date</label>
<SELECT " id="RDV" name="RDV" size="3" required oninvalid="this.setCustomValidity('vous devez choisir une date')" oninput="setCustomValidity('')">

<p id=hts">
</SELECT><br /><label>Choisissez l'Heure</label><SELECT id="htc" name="Houres" size="2" required oninvalid="this.setCustomValidity('vous devez choisir une heure')"oninput="setCustomValidity('')"></SELECT>
<br />

<br />

<br />
<input type="submit" name="OK" value="RESERVER">
</form>
</center>
<!-- link to change -->

<a href="/Interview/Main-page">
Retour
</a>

	</div>
<p clolor="black" class="copy_rights">&copy; ce systeme a ete develope par Koalal.Mohamed.Amir, Touts Droits Reserves</p>
</div>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>


