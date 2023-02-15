<?php
include('conn.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJOUTER.FST</title>
    <link rel='stylesheet' href="style.css">
    <style>
       
        
       body{
            background-color: gray;
        }
        .b{
            background-color: gray;
            
            
            border-radius: 15px;
        }
        .container{
            display: flex;
            justify-content: center;
            
            background-color: whitesmoke;

        }
        input{
        width: 393px;
        height: 40px;
        border-radius: 10px;
        border-color: white;
    }
        .cpr{
            display: block;
            justify-content: center;
            text-align: center;
            color: white;
        }
        label{
            color: white;
        }
        .e{
            width: 400px;
        height: 40px;
    }
        
.btn-aj{
    margin: auto;
   width: 165px;
   height: 40px;

}
.btn-aj:hover{
    background-color: green;
    color: white;
    border-color: green;
}
    legend{
        color: white;
        background-color: red;
    }   
    
        
    </style>
    
</head>

<body>

<!--<header><img src="src/logo.png" width="100%" height="90px"/> </header>-->
    <div class="container">
        <fieldset class="b">
        <!-- DEBUT CODE PHP   -->
    <legend>
        <?php
if (isset($_POST['ajt'])){
  
    $nom=htmlspecialchars($_POST['nom']);
    $prenom=htmlspecialchars($_POST['prenom']);
    $email=$_POST['email'];
    $date=$_POST['date'];
    $filiere=$_POST['filiere'];
    $sexe=$_POST['sexe'];
    $lr=$_POST['lr'];
    $tel=$_POST['tel'];

    $sql1="SELECT * FROM étudiants WHERE email='$email'";
    $exist=mysqli_query($con,$sql1);
    $exist = $exist->fetch_assoc();

    $sql2="SELECT * FROM étudiants WHERE NUMTEL='$tel'";
    $exist2=mysqli_query($con,$sql2);
    $exist2 = $exist2->fetch_assoc();

    if ($exist OR $exist2){
        echo "EMAIL OU NUMERO TELEPHONE DEJA EXISTE!!";
        
        
    }
    else{
    $sql= "INSERT INTO étudiants(ID,daten,email,filiere,lieur,nom,prénom,sexe,NUMTEL) 
    VALUES(NULL,'$date','$email','$filiere','$lr','$nom','$prenom','$sexe','$tel');";
    mysqli_query($con,$sql);
    header('location:index.php');
    }
    
}      

?>
</legend>


        <!-- FIN CODE PHP-->
   <form class="box" action="ajouter.php" method="post">
    <label>NOM</label>
    <input name="nom" type="text" size="12" maxlength="12" required placeholder="nom de l'etudiant">
    <label>PRENOM</label>
    <input name="prenom" type="text" size="12" maxlength="12" required placeholder="prenom de l'etudiant">
    <label>EMAIL</label>
    <input name="email" type="email" size="20"  maxlength="20" placeholder="email de l'etudiant">
    <label >TEl</label>
    <input name="tel" type="text" size="8" minlength="8" maxlength="8" placeholder="numero tel de l'etudiant" required>
    <label>DATE DE NAISSANCE</label>
    <input name="date" type="date" required>
    <label for="filiere">FILIERE:</label>
    <select class="e" name="filiere" required>
        <option value="">LE FILERE DE L'ÉTUDIANT</option>
        <option value="DAIIL3">DAII L3</option>
        <option value="MIAGEL3">MIAGE L3</option>
        <option value="DAII">DAII</option>
        <option value="MIAGE">MIAGE</option>
        <option value="MAI">MAI</option>
        <option value="BG">BG</option>
        <option value="MPI">MPI</option>
        <option value="PC">PC</option>
        <option value="MI">MI</option>

    </select>
    <label for="sexe">SEXE:</label>
    <select class="e" name="sexe" required>
        <option value="">SON SEXE</option>
        <option value="H">HOMME</option>
        <option value="F">FEMME</option>
    </select>
    <label for="lr">ADRESS</label>
    <select class="e" name="lr">
        <option value="">ADRESS DE L'ETUDIANT</option>
        <option value="NORD">NKC-NORD</option>
        <option value="EST">NKC-EST</option>
        <option value="OUEST">NKC-OUEST</option> 
    </select><br>
    
    <input class="btn-aj" name="ajt" type="submit" value="AJOUTER">
    

   </form>
        </fieldset>
    </div>
    <!--<footer> 
        <b><p class="cpr">© SIDIBRAHIM JANVIER-2023</p></b>
    </footer>-->
</body>
</html>
<!--
<?php
if (isset($_POST['ajt'])){
  
    $nom=htmlspecialchars($_POST['nom']);
    $prenom=htmlspecialchars($_POST['prenom']);
    $email=$_POST['email'];
    $date=$_POST['date'];
    $filiere=$_POST['filiere'];
    $sexe=$_POST['sexe'];
    $lr=$_POST['lr'];
    $tel=$_POST['tel'];

    $sql1="SELECT * FROM étudiants WHERE email='$email'";
    $exist=mysqli_query($con,$sql1);
    $exist = $exist->fetch_assoc();

    $sql2="SELECT * FROM étudiants WHERE NUMTEL='$tel'";
    $exist2=mysqli_query($con,$sql2);
    $exist2 = $exist2->fetch_assoc();
    
    if ($exist OR $exist2){
        echo "EMAIL OU NUMERO TELEPHONE DEJA EXISTE";
        
    }
    else{
        
    $sql= "INSERT INTO étudiants(ID,daten,email,filiere,lieur,nom,prénom,sexe,NUMTEL) 
    VALUES(NULL,'$date','$email','$filiere','$lr','$nom','$prenom','$sexe','$tel');";
    mysqli_query($con,$sql);
    header('location:/index.php#footer');
    }
    
}      

?>
