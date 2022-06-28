
<script type='text/javascript'>

history.pushState(null, null, location.href);
    window.onpopstate = function () {
        history.go(1);
    };
}
</script>
<?php include 'database.php'; ?>

<?php


// test si les sont champs remplits

if(!empty($_POST['NOM']))
{

if(!empty($_POST['RDV']))
{
if(isset($_POST['Houres']))
{



//connection
$con=mysqli_connect("localhost","root","","rdv_interview");


// creation des variables
$nom=$_POST['NOM'];
$rdv=$_POST['RDV'];
$houres=$_POST['Houres'];
$numberOfrdv=0;
$numberOfrdv2=0;





// chercher le rdv dans la table
$result = mysqli_query($connect,"SELECT * FROM rdv_interview WHERE rdv='$rdv' AND heure='$houres'");
$result2 = mysqli_query($connect,"SELECT * FROM rdv_interview WHERE rdv='$rdv'");

// verrification de la connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


$test=false;
// conversion des valeurs retournées
while($row = mysqli_fetch_array($result))
{
// si depart present dans la table
$test=true;
$numberOfrdv=$numberOfrdv+1;
}
while($row = mysqli_fetch_array($result2))
{
// si depart present dans la table
$test=true;
$numberOfrdv2=$numberOfrdv2+1;
}
//echo "numberOfrdv " .$numberOfrdv;

// verrification si le depart existe
if($numberOfrdv>=2 || $numberOfrdv2>=26)
{




//........................................................................................
//$result = mysqli_query($con,"SELECT * FROM patient");
$result = mysqli_query($con,"SELECT * FROM patient WHERE rdv='$rdv'");

echo " 


<!DOCTYPE html>
<html>
<head>
<title>Interview system</title>
<!-- for-mobile-apps -->
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1'>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' /> 
<meta name='keywords' content='Bus Ticket Reservation Widget Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design' />
<!-- //for-mobile-apps -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link rel='stylesheet' type='text/css' href='css/jquery.seat-charts.css'>
<link href='css/style.css' rel='stylesheet' type='text/css' media='all' />
<script src='js/jquery-1.11.0.min.js'></script>
<script src='js/jquery.seat-charts.js'></script>
<script>
function setdates(){
history.pushState(null, null, location.href);
    window.onpopstate = function () {
        history.go(1);
    };
}
</script>
</head>
<body onload='setdates()'>
<div class='content'>
	<h1>Etape 2   Oops!</h1>
	<div class='main'>
		

<!DOCTYPE html>
<html>


<head>
<style>
label{display:inline-block;width:100px;margin-bottom:10px;}
</style>


<title>Prendre Rendez-vous</title>
</head>
<body>
<center>

<table border='3'>

<tr>
<th>|Selection cometee|</th>



</tr>



";
//--------------------Link to change------------------------------------
echo ' <p><H2>le rendez-vous du :  <b>'.$rdv.'</b> a <b>'.$houres.'</b> nest pas disponible veuillez selectionner un autre rendez-vous 
<a href="Page-add_rdv.php">retour a la page de selection d un rendez-vous</a> OU </p></body>  </<h2>';
//----------------------------------------------------------------------

$nom="";
$rdv="";
$houres="";




mysqli_close($con);
//........................................................................................
$nom="";
$rdv="";
$houres="";



// deconnexion
mysqli_close($connect);

}
else{
//si le depart est trouvé
//echo " <H2> nous avons trouver des departs le <b>".$rdv."</b> a <b>".$houres."</b> voulez vous reserver des billets pour cette date ? </H2>";
header('process_add_rdv.php'); 


$connect=mysqli_connect("localhost","root","","rdv_interview");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}





//........................................................................................
//$result = mysqli_query($con,"SELECT * FROM patient");
mysqli_query($connect,"INSERT INTO rdv_interview (nom,rdv, heure) VALUES ('$nom','$rdv','$houres')");
 
echo " 

<!DOCTYPE html>
<html>
<head>
<title>Interview system</title>
<!-- for-mobile-apps -->
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1'>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' /> 
<meta name='keywords' content='Bus Ticket Reservation Widget Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design' />
<!-- //for-mobile-apps -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link rel='stylesheet' type='text/css' href='css/jquery.seat-charts.css'>
<link href='css/style.css' rel='stylesheet' type='text/css' media='all' />
<script src='js/jquery-1.11.0.min.js'></script>
<script src='js/jquery.seat-charts.js'></script>

<script>
function setdates(){
history.pushState(null, null, location.href);
    window.onpopstate = function () {
        history.go(1);
    };
}
</script>
</head>
<body  onload='setdates()'>
<div class='content'>
	<h1>FELICITATION</h1>
	<div class='main'>
		

<!DOCTYPE html>
<html>


<head>
<style>
label{display:inline-block;width:100px;margin-bottom:10px;}
</style>


<title>Prendre Rendez-vous</title>
</head>
<body>
<center>


 <H2> votre rendez-vous est le <b>".$rdv."</b> a <b>".$houres."</b></H2>
<table border='3'>

<tr>
<th>|Selection cometee|</th>


</tr>";




mysqli_close($connect);
//........................................................................................


$nom="";
$rdv="";
$houres="";


}
// fin test si rdv deja prit







// si les champs ne sont pas remplits
}else{
echo "
<script src='js/jquery.nicescroll.js'></script>
<script src='js/scripts.js'></script>
<script>
alert('nom non remplit')
</script>";
}
 }else{
echo "
<script src='js/jquery.nicescroll.js'></script>
<script src='js/scripts.js'></script>
<script>
alert('date non remplit')
</script>";
}
}else{
echo "
<script src='js/jquery.nicescroll.js'></script>
<script src='js/scripts.js'></script>
<script>
alert('vous avez deja deja envoyer ce formulaire; les informations que vous avez entrer ne sont plus disponible!')
</script>";
}


//--------------------Link to change------------------------------------
echo "
<a href='Main-page'>retour a la page d'accueil</a></body>  </<h2>";
//----------------------------------------------------------------------
//-----------------------------------------------------------------------

$nom="";
$rdv="";
$houres="";

?>

