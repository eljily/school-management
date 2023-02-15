<?php include('conn.php');
?>
<link rel="stylesheet" href="style.css">
<title>MODIFIER.FST</title>
<style>
    body{
        background-color: gray;
    }
    .container{
            display:grid;
            justify-content: center;
            align-items: center;
            background-color: white;
        }
    input{
        width: 400px;
        height: 40px;
    }
    .cpr{
        display: block;
        justify-content: center;
        text-align: center;
        color: white;
    }
    .b{
            background-color: gray;
        }
        .e{
            width: 400px;
        height: 40px;
        }
        label{
            color: white;
        }
        .btn-s{
            margin-left: 95px;
        
    width: 200px;
    height: 40px;
}
.btn-s:hover{
    background-color: green;
    color: white;
    border-color: gray;
    width: 220px;
    height: 40px;
}
</style>
<?php
if (isset($_POST['mod'])){
$id=$_POST['id'];
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $email=$_POST['email'];
    $daten=$_POST['daten'];
    $filiere=$_POST['filiere'];
    $sexe=$_POST['sexe'];
    $lr=$_POST['lieur'];
    $tel=$_POST['NUMTEL'];
 

?>

<!--<header><img src="src/logo.png" width="100%" height="90px"/> </header>-->
<div class="container">
   
    <fieldset class="b">
   <form class="box" method="post">
    <input type="hidden" name="nid" value="<?php echo $id;?> ">
    <label>NOM</label>
    <input name="nnom" type="text" required value="<?php echo $nom;?>">
    <label>PRENOM</label>
    <input name="nprenom" type="text" required value="<?php echo $prenom;?>">
    <label>EMAIL</label>
    <input name="nemail" type="email" value="<?php echo $email;?>">
    <label >TEl</label>
    <input name="ntel" type="text" value="<?php echo $tel;?>" required>
    <label>DATE DE NAISSANCE</label>
    <input name="ndate" type="date"  value="<?php echo $daten;?>" required>
    <label for="filiere">FILIERE:</label>
    <select class="e" name="nfiliere" required>
        <option value="<?php echo $lr?>"><?php echo $lr?></option>
        <option value="DAII">DAII</option>
        <option value="MIAGE">MIAGE</option>
        <option value="MAI">MAI</option>
        <option value="BG">BG</option>
        <option value="PC">PC</option>
        <option value="MI">MI</option>
    </select>
    <label for="sexe">SEXE:</label>
    <select class="e" name="nsexe" required >
        <option value="<?php echo $sexe?>"><?php if ($sexe == 'H'){ echo "homme";}else {echo "femme";}?></option>
        <option value="H">HOMME</option>
        <option value="F">FEMME</option>
    </select>
    <label for="lr">LIEU DE RESIDENCE</label>
    <select class="e" name="nlr" required>
        <option value="<?php echo $lr?>"><?php echo $lr?></option>
        <option value="NKC-NORD">NKC-NORD</option>
        <option value="NKC-EST">NKC-EST</option>
        <option value="NKC-OUEST">NKC-OUEST</option> 
    </select><br>
    
    <input class="btn-s" name="ajt-n" type="submit" value="sauvgarder les modfiction">
</fieldset>

   </form>
    </div> 
    <!--<footer> 
        <b><p class="cpr">© SIDIBRAHIM JANVIER-2023</p></b>
    </footer>-->
    
    <?Php
}
 
    if (isset($_POST['ajt-n'])){
        $nnom=htmlspecialchars($_POST['nnom']);
        $nprenom=htmlspecialchars($_POST['nprenom']);
        $nemail=$_POST['nemail'];
        $ndaten=$_POST['ndate'];
        $nfiliere=$_POST['nfiliere'];
        $nsexe=$_POST['nsexe'];
        $nlr=$_POST['nlr'];
        $ntel=$_POST['ntel'];
        $id=$_POST['nid'];
        echo $id;
        $sql="UPDATE `étudiants` SET `NUMTEL`='$ntel',`nom`='$nnom',`prénom`='$nprenom',`email`='$nemail',`daten`='$ndaten',`sexe`='$nsexe',`filiere`='$nfiliere',`lieur`='$nlr' WHERE ID='$id';";
        mysqli_query($con,$sql);
        header('location:index.php');
           
    }?>
    
    