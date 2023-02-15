<?php
include('conn.php');
?>
<!-- INDEX = DASHBORD  -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASHBORD</title>
    <link rel="stylesheet" href='style.css'> 
   <style>
   
   table{
        display:flex;
        justify-content: center;
        align-items: center;
        
    }
    table td{
        border: 3px solid gray;
        background-color: white;
        
    }
    table th{
        border: 3px solid gray;
        background-color: white;
        border-top: 0ch;
        
        
       
    }
    body{
        background-color: gray;
    }
    .btn-sup:hover{
        background-color: red;
        color: azure;
    }
    .btn-mod:hover{
        background-color: blue;
        color: white;
    }
    a{
        display: block;
        text-align: center;
        color: black;
        background-color: white;
        margin: auto;
        
    }
    a:hover{
        color: white;
        background-color: green;
    }
    .cpr{
            display: block;
            justify-content: center;
            text-align: center;
            color: white;
        }
        .btn-atst:hover{
            color: white;
            background-color: green;

        }
        .haut{
            display: flex;
            justify-content: right;
            text-align: right;
        }
       
   
   </style>
</head>
<body>
    <header><img src="src/logo.png" width="100%" height="90px"/> <a href="#footer">footer</a></header>
    <main>
       
    <table>
        <th>MATRICULE</th>
        <th>NOM</th>
        <th>PRENOM</th>
        <th>TEL</th>
        <th>FILIERE</th>
        <th>EMAIL</th>
        <th>DATE DE NAISSANCE</th>
        <th>ADRESS</th>
        <th>SEXE</th>
        <th colspan="4">ACTION</th>
        
       
<!--  PARTIE AFFICHAGE : -->
    <?php
$sql="SELECT * FROM étudiants";
$resultats=mysqli_query($con,$sql);
while($ligne = $resultats->fetch_assoc()){?>
<tr>
   <td> <?php echo "C".$ligne['ID'] ; ?></td>
    <td> <?php echo $ligne['nom'] ; ?></td>
    <td> <?php echo $ligne['prénom']; ?></td>
    <td> <?php echo $ligne['NUMTEL'];?></td>
    <td> <?php echo $ligne['filiere'];?></td>
    <td> <?php echo $ligne['email'] ; ?></td>
    <td> <?php echo $ligne['daten']; ?></td>
    <td> <?php echo $ligne['lieur'];?></td>
    <td> <?php echo $ligne['sexe'];?></td> 
    <td>
<!--  FIN AFFICHAGE -->
        <!--   PARTIE SUPPRESSION: -->
    <form method="post" action="supprimer.php">
            <input type="hidden"  name="id" value='<?php echo $ligne['ID'];?>'>
            <input class="btn-sup" type="submit" value="SUPPRIMER">
        </form></td><td>
            <!--    FIN SUPPRESSION     -->
            <!--  Partie modification -->
        <form method="post" action="modifier.php">
            <input type="hidden" name="id" value='<?php echo $ligne['ID'];?>'>
            <input type="hidden" name="nom" value='<?php echo $ligne['nom'];?>'>
            <input type="hidden" name="prenom" value='<?php echo $ligne['prénom'];?>'>
            <input type="hidden" name="NUMTEL" value='<?php echo $ligne['NUMTEL'];?>'>
            <input type="hidden" name="filiere" value='<?php echo $ligne['filiere'];?>'>
            <input type="hidden" name="email" value='<?php echo $ligne['email'];?>'>
            <input type="hidden" name="daten" value='<?php echo $ligne['daten'];?>'>
            <input type="hidden" name="lieur" value='<?php echo $ligne['lieur'];?>'>
            <input type="hidden" name="sexe" value='<?php echo $ligne['sexe'];?>'>
            <input class="btn-mod" name="mod" type="submit" value="MODIFIER">
        </form>
        <!-- FIN MODIFICATION    -->
        
        <!--  DEBUT ATTESTATION : -->
        <td>
        <form method="post" action="atst.php">
            <input type="hidden" name="id" value='<?php echo $ligne['ID'];?>'>
            <input type="hidden" name="nom" value='<?php echo $ligne['nom'];?>'>
            <input type="hidden" name="prenom" value='<?php echo $ligne['prénom'];?>'>
            <input type="hidden" name="NUMTEL" value='<?php echo $ligne['NUMTEL'];?>'>
            <input type="hidden" name="filiere" value='<?php echo $ligne['filiere'];?>'>
            <input type="hidden" name="email" value='<?php echo $ligne['email'];?>'>
            <input type="hidden" name="daten" value='<?php echo $ligne['daten'];?>'>
            <input type="hidden" name="lieur" value='<?php echo $ligne['lieur'];?>'>
            <input type="hidden" name="sexe" value='<?php echo $ligne['sexe'];?>'>

            <input class="btn-atst" name="atst" type="submit" value="ATTEASTATION">
        </form> </td>
        <!-- FIN D'ATTESTATION  -->
       
    </td>
</tr>


<?php }?>
</table>
    </main>
<!-- PARTIE FOOTER :-->
   <footer id="footer"> 
        <b><p class="cpr"><button><a href="ajouter.php">AJOUTER UN NOUVEAU</a> </button></p></b>
        <p class="haut"> <b><a href="#">RETOURNER EN HAUT </a></b> </p> 
    </footer>
<!--  FIN FOOTER   -->
</body>
</html> 