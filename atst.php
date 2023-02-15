<?php
include('conn.php');
?>
<?php
if (isset($_POST['atst'])){
$id=$_POST['id'];
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $email=$_POST['email'];
    $daten=$_POST['daten'];
    $filiere=$_POST['filiere'];
    $sexe=$_POST['sexe'];
    $lr=$_POST['lieur'];
    $tel=$_POST['NUMTEL'];
    
 
}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATTESTATION</title>
    <style>
        .container{
            display: grid;
            justify-content: center;
            text-align: left;
            border: 3px black solid;
            height: 450px;
       
        }
        
        
        .hs{
            display: grid;
            margin-bottom: 300px;
            margin-right: 170px;
        }
   
        
    </style>
</head>
<body>
<header><img src="src/logo.png" width="100%" height="90px"/> </header>

  
    <div class="container">
   
    <img src="src/images.png" style="position: absolute;margin-top:0px;margin-left:86%;height: 150pxpx;width:150px">
    <div class="hs">

        <h1 style="margin-left: 267px">Attesatation d'inscription</h1>
       
        <h2 style="margin-left: 30px">Le Doyen da la Faculté des Sciences et Techniques de l'Université de Nouackchott attest que:</h2>
        <h3>M(MIIe) : <?php echo $nom." ".$prenom;?></h3>
        <h4>Né(e) Le : <?php echo $daten;?></h4>
        <h4>Sexe : <?php if($sexe=='H'){echo 'HOMME';}else{echo 'FEMME';};?></h4>
        <h4>Est inscrit(e) sous le numéro :<?php echo 'C'.$id;?></h4>
        <h4> Sous le filiere de Nom : <?php echo "L2AN23".$filiere;?></h4>
    </div>
    </div>

</body>
</html>
