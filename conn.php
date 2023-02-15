<?php 
$servname="localhost";
$uname="root";
$upassword="36612045Dd";
$dbname="minip";
$con=new mysqli($servname,$uname,$upassword,$dbname);
if (!$con){
    echo "erreur lors du connexion";
}
