<?php
session_start();
include 'connection.php';

if (isset($_GET["search"]) && !empty($_GET['search'])) {


  $recherche = $_GET['search'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <title>Google Images</title>
    <link rel="icon" href="favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/style2.css">
    <style>
        body {
            margin: 0px;
            padding: 0px;
        }
        /* 
.block.gauche:hover {
  border: 1px solid #777;
} */
        /* .block.gauche img {
  width:30%;
  
} */
        

            /* white-space: nowrap; 
  width: 200px; 
  /* border: 1px solid #000000; */
            /* overflow: hidden;
  text-overflow: ellipsis; */
        }
        /* * {
  box-sizing: border-box;
} */
        /* .block.gauche {
  padding: 0 6px;
  float: left;
  width: 24.99999%;
} */
        

        
        .clearfix:after {
            content: "";
            display: table;
            clear: both;
        }
        
        .loupebleue {
            width: 30px;
            position: absolute;
            top: 46px;
            left: 725px;
        }
        
        p.test2 {
            white-space: nowrap;
            width: 200px;
            /* border: 1px solid #000000; */
            overflow: hidden;
            text-overflow: ellipsis;
        }
        
        .input{
            margin-top: -20px;
            
        }
        
        .hr {
            width: 1130px;
            padding: 0px;
            top: 50px;
            margin-block-end: 70px;
        }
        
        .barresimages {
            margin-right: 30px;
            margin-left: px;
            stroke-opacity: .4;
            margin-top: -60px;
        }
        
        .block {
            height: 30%;
            width: 50%;
            position: absolute;
             /* z-index: 1;  */
            top: 40%;
            /* overflow-x: hidden; */
             /* padding-top: 20px;  */
        }
        
        /* .gauche {
            left: 0;
            background-color: white;
            width: 60%;
        }
        
        .droit {
            right: 0;
             background-color: rgb(0, 0, 0); 
           
            width: 40%;
            height: 100%;
            margin-bottom:50%;
            
        } */
        
        

    </style>

</head>

<body>
    <div classe="en-tete">
        <form action="index3.php" method="get"><br><br>
            <img src="images/logo.png" alt="logo google" class="logo">
            <img src="images/search.svg" alt="loupe transparente" class="loupegrise">
            <input type="text" name="recherche" id="recherche" class="input">
            <img src="images/louperachat.png" alt="loupe" class="loupebleue" width="20px">
            <img src="images/vs.png" alt="micro" class="microphone">
            <img src="images/cam.png" alt="camera" class=cam>
            <input type='image' name='recherche' src="images/louperachat.png" class="loupebleue">
    </div>

    <div class="container">
      <div class="row">
        
        <?php
 //Inclusion de la connexion à la BD
 include 'connection.php';
 echo $_GET['idfleurs'];
//Récupérer l'image à partir du base de données 

if (isset($_GET['search'])){
$recherche = $_GET['search'];
$id_fleurs= $_GET['idfleurs'];

$query = "SELECT * FROM info_fleurs LEFT JOIN info_image
ON info_fleurs.idfleurs=info_image.idinfo_images WHERE nomfleurs LIKE '%$recherche%' OR typefleurs LIKE '%$recherche%'
ORDER BY `info_fleurs`.`nomfleurs` ASC ";
    $result = mysqli_query( $conn,$query);
     $num = mysqli_num_rows($result); 
    // $row = mysqli_fetch_assoc($result);
    
    if ($num > 0) {
      // recuperation des données

      while ($row = mysqli_fetch_assoc($result)) {

        $id_images = $row['id_images']; 
        $idinfo_images = $row['idinfo_images'];
        $idfleurs = $row['idfleurs'];
        $lienfleurs = $row['lienfleurs'];
        $nomfleurs = $row['nomfleurs'];
        $typefleurs = $row['typefleurs'];
        $desc_fleurs = $row['desc_fleurs'];
        $date_enre_fleurs = $row['date_enre_fleurs'];
 
?>
<div class="col">
         
<div class="card-deck">
  <div class="card">
  <a href="index3.php?idfleurs=<?php echo $idfleurs;?>&search=<?php echo $_GET['search'] ?>">
    <img class="card-img-top" src="<?php echo $lienfleurs ?>" alt="Card image cap" style="width:218px;height:200px;">
    <div class="card-body">
      <h5 class="card-title"><?php echo $nomfleurs ?> </h5>
      <p class="card-text"><?php echo substr('$desc_fleurs', 0, 100); ?></p>
    </div>
      </a>
      </div>
            <?php

        }
 
}else{         
            echo'image non trouvée';   
          }
        }
         
      
          

?>
</div>
        </div>
        <div class="col">
        <?php 

$id_fleurs = $_GET['idfleurs'];
$query1 = "SELECT * FROM info_fleurs LEFT JOIN info_image ON info_fleurs.idfleurs=info_image.idinfo_images WHERE idfleurs  LIKE '$id_fleurs%'
ORDER BY `info_fleurs`.`nomfleurs` ASC ";
$result1 = mysqli_query( $conn,$query1);
$num1 = mysqli_num_rows($result1); 
// $row = mysqli_fetch_assoc($result);

if ($num1 > 0) {
// recuperation des données

while ($row1 = mysqli_fetch_assoc($result1)) {

$id_image = $row1['id_images']; 
$idinfo_image = $row1['idinfo_images'];
$idfleur = $row1['idfleurs'];
$lienfleur = $row1['lienfleurs'];
$nomfleur = $row1['nomfleurs'];
$typefleur = $row1['typefleurs'];
$desc_fleur = $row1['desc_fleurs'];
$date_enre_fleur = $row1['date_enre_fleurs'];

 ?> 
        </div>
      </div>
    </div>
   <!-- The Modal -->
<div id="myModal" class="card-imagel">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>    
         
</div>
     </div>
        </div>
        

        <div class="block droit">
            <div class="centered">
            <?php 

            $id_fleurs = $_GET['idfleurs'];
            $query1 = "SELECT * FROM info_fleurs LEFT JOIN info_image ON info_fleurs.idfleurs=info_image.idinfo_images WHERE idfleurs  LIKE '$id_fleurs%'
ORDER BY `info_fleurs`.`nomfleurs` ASC ";
    $result1 = mysqli_query( $conn,$query1);
     $num1 = mysqli_num_rows($result1); 
    // $row = mysqli_fetch_assoc($result);
    
    if ($num1 > 0) {
      // recuperation des données

      while ($row1 = mysqli_fetch_assoc($result1)) {

        $id_image = $row1['id_images']; 
        $idinfo_image = $row1['idinfo_images'];
        $idfleur = $row1['idfleurs'];
        $lienfleur = $row1['lienfleurs'];
        $nomfleur = $row1['nomfleurs'];
        $typefleur = $row1['typefleurs'];
        $desc_fleur = $row1['desc_fleurs'];
        $date_enre_fleur = $row1['date_enre_fleurs'];

             ?> 
     
     <div class="mt-3 text-light " style="background:black">
                    <img class="card-img-top" src="<?php echo $lienfleur ?>" alt="Card image cap" style=" width: 450px; height:250px; object-fit:contain">
                    <div class="card-body">
                        <div class="d-block " style="margin-right:-50px;padding-right:20px">
                            <p class="text-capitalize"><ul>
    <li>Nom:<?php echo $nomfleur;?></li>
    <li>type:<?php echo $typefleur;?></li>
    <li>Description:<?php echo $desc_fleur;?></li>
  </ul>
                                                            </p>

                            <a href="#" class="btn btn-round text-capitalize btn-sm position-absolute" style="background:cornflowerblue;margin-top:-40px; margin-left:300px;">Consulter</a>
                        </div>
<!-- <div >
<img src="<?php echo $lienfleur;?>" alt="" srcset="">
<p>Information de la fleur
  <ul>
    <li>Nom:<?php echo $nomfleur;?></li>
    <li>type:<?php echo $typefleur;?></li>
    <li>Description:<?php echo $desc_fleur;?></li>
  </ul>
</p>
</div> -->

            </div>
        </div>
    </div>
  


    <?php
      }
    }
        $conn->close();
        ?>
        
  </body>
    </html>