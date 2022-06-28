<?php 
include "database.php"; 
$con=mysqli_connect("localhost","root","","rdv_interview");
$n=1;
$d1=false;
$d2=false;
$d3=false;
while($n<=3){
$result = mysqli_query($con,'SELECT * FROM rdv_interview WHERE rdv="0'.$n.'-03-2019"');

$numberOfrdv=0;
// 01-03-2019
while($row = mysqli_fetch_array($result))
{
// si present dans la table
$numberOfrdv=$numberOfrdv+1;
}

// verrification si le depart existe
if($numberOfrdv>=26 && $n==1)
{
$d1=true;
}
if($numberOfrdv>=26 && $n==2)
{
$d2=true;
}
if($numberOfrdv>=26 && $n==3)
{
$d3=true;
}
$n=$n+1;
}



//-------------------------------------------------------------------------------------------------
$alldates=0;
while($alldates<=3){
//-------------------------9:00--11:30----------------------------------------------------------------------
$ng=0;
$nip=0;
$ni=0;
$h=9;
$m=0;

$con=mysqli_connect("localhost","root","","rdv_interview");




while($h<=11){
while($m<=3){

$result = mysqli_query($con,'SELECT * FROM rdv_interview WHERE heure="'.$h.':'.$m.'0" AND rdv="0'.$alldates.'-03-2019"');

$numberOfrdv=0;

while($row = mysqli_fetch_array($result))
{
// si present dans la table
$numberOfrdv=$numberOfrdv+1;
}

if($alldates==0){
$array0[$nip]=$h.":".$m."0";
$nip=$nip+1;
}
// verrification si le depart existe
if($numberOfrdv<2)
{

if($alldates==1){
$array1[$ni]=$h.":".$m."0";
}
if($alldates==2){
$array2[$ni]=$h.":".$m."0";
}
if($alldates==3){
$array3[$ni]=$h.":".$m."0";
}
$ni=$ni+1;
}else{


}


$m=$m+3;


}
$ng=$ng+1;
$h=$h+1;
$m=0;

}


$h=14;
$m=0;

$con=mysqli_connect("localhost","root","","rdv_interview");


//-------------------------------------------------------------------------

//------------------------------14:00--16:30------------------------------------------

while($h<=16){
while($m<=3){

$result = mysqli_query($con,'SELECT * FROM rdv_interview WHERE heure="'.$h.':'.$m.'0" AND rdv="0'.$alldates.'-03-2019"');

$numberOfrdv=0;

while($row = mysqli_fetch_array($result))
{
// si present dans la table
$numberOfrdv=$numberOfrdv+1;
}

if($alldates==0){
$array0[$nip]=$h.":".$m."0";
$nip=$nip+1;
}
// verrification si le depart existe
if($numberOfrdv<2)
{

if($alldates==1){
$array1[$ni]=$h.":".$m."0";
}
if($alldates==2){
$array2[$ni]=$h.":".$m."0";
}
if($alldates==3){
$array3[$ni]=$h.":".$m."0";
}
$ni=$ni+1;
}else{


}


$m=$m+3;


}
$ng=$ng+1;
$h=$h+1;
$m=0;

}

$alldates=$alldates+1;}
?>
