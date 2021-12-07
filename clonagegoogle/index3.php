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

    .input {
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
      height: 100px;
      width: 50%;
      position: absolute;
      
      top: 40%;
     
    }

    .gauche {
      left: 0;
      background-color: white;
      width: 60%;
    }

    .droit {
      right: 0;
      width: 40%;
      height: 150px;
      margin-bottom: 50%;

    }

    div.gallery {
      margin: 3px;
      border: 1px solid #ccc;
      float: left;
      width: 180px;

    }

    div.gallery:hover {
      /* border: 1px solid #777; */
      -moz-box-shadow: 0 0 20px #ccc;
      -webkit-box-shadow: 0 0 20px #ccc;
      box-shadow: 0 0 20px #ccc;
    }

    div.gallery img {
      width: 100%;
      height: 80px;

      /* max-width: 100%;
            max-height: 180%;
            object-fit: cover; */

    }

    div.desc {
      margin-left: 20px;
      padding: 15px;
      text-align: center;
    }

    

    .pic-container {
      height: 300%;
      overflow: hidden;
      overflow-y: scroll;
      width: 500px;
    }
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
      <!-- <input type='image' name='recherche' src="images/louperachat.png" class="loupebleue"> -->
  </div>


  <div class="mc">
    <div class="block gauche" style="width:60%">
      <?php
      //Inclusion de la connexion à la BD
      include 'connection.php';
      // echo $_GET['idfleurs'];
      //Récupérer l'image à partir du base de données 

      if (isset($_GET['search'])) {
        $recherche = $_GET['search'];
        $id_fleurs = $_GET['idfleurs'];

        $query = "SELECT * FROM info_fleurs LEFT JOIN info_image
ON info_fleurs.idfleurs=info_image.idinfo_images WHERE nomfleurs LIKE '%$recherche%' OR typefleurs LIKE '%$recherche%'
ORDER BY `info_fleurs`.`nomfleurs` ASC ";
        $result = mysqli_query($conn, $query);
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

            <a href="index3.php?idfleurs=<?php echo "$idfleurs"; ?>&search=<?php echo $_GET['search'] ?>" class="text-dark">
              <div class="gallery">
                <img src="<?php echo $lienfleurs ?>" alt="" width="50" height="150" class="image">
                <span class="desc"><br><?php echo $nomfleurs
                                        ?><br><big><?php echo (html_entity_decode(
                              substr("$row[desc_fleurs]", 0, 14)
                            ) .
                              "...") ?> </big></span>
              </div>


            </a>
      <?php

          }
        } else {
          echo 'image non trouvée';
        }
      }




      ?>



    </div>
  </div>
  </div>


  <div class="block droit">
    
            
    <div class="pic-container " style="background:black;margin-right:-50px">
      <?php

      $id_fleur = $_GET['idfleurs'];
      $query1 = "SELECT * FROM info_fleurs LEFT JOIN info_image ON info_fleurs.idfleurs=info_image.idinfo_images WHERE idfleurs  LIKE '$id_fleur%'
ORDER BY `info_fleurs`.`nomfleurs` ASC ";
      $result1 = mysqli_query($conn, $query1);
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
            <div class="pic-container">
              <img class="card-img-top" src="<?php echo $lienfleur ?>" alt="Card image cap" style=" width: 450px; height:250px; object-fit:contain">
              <div class="card-body">
                <div class="d-block " style="height:180px">
                  <p class="text-capitalize">
                  <ul>
                    <li>Nom:<?php echo $nomfleur; ?></li>
                    <li>type:<?php echo $typefleur; ?></li>
                    <li>Description:<?php echo $desc_fleur; ?></li>
                  </ul>
                  </p>

                </div>


              </div>

            </div>
          </div>

          <div class="row col-12 ml-1 d-inline-block">


            <div class="row">
              <?php
              if (isset($_GET['search'])) {
                $id_fleurs = $_GET['idfleurs'];
                $query = "SELECT * FROM info_fleurs LEFT JOIN info_image ON info_fleurs.idfleurs=info_image.idinfo_images WHERE idfleurs  LIKE '$id_fleurs%'
ORDER BY `info_fleurs`.`nomfleurs` ASC ";
                $result = mysqli_query($conn, $query);
                $num = mysqli_num_rows($result);
                // $row = mysqli_fetch_assoc($result);

                if ($num > 0) {
                  // recuperation des données

                  while ($row = mysqli_fetch_assoc($result)) {

                    $id_image = $row['id_images'];
                    $idinfo_image = $row['idinfo_images'];
                    $idfleur = $row['idfleurs'];
                    $lienfleur = $row['lienfleurs'];
                    $nomfleur = $row['nomfleurs'];
                    $typefleur = $row['typefleurs'];
                    $desc_fleur = $row['desc_fleurs'];
                    $date_enre_fleur = $row['date_enre_fleurs'];

              ?>

                    <div class="col-6 mx-auto">
                      <a href="index3.php?idfleurs=<?php echo $row['idfleurs']; ?>&search=<?php echo $_GET['search'] ?>" class="text-dark">
                        <img src="<?php echo $lienfleur ?>" alt="" width="180" height="150">
                        <span class="desc text-light"><big><?php echo (html_entity_decode(
                                                              substr("$row[nomfleurs]", 0, 14)
                                                            ) .
                                                              "...") ?> </big></span>




                      </a>
                    </div>

              <?php
                  }
                }
              }

              ?>
            </div>


          </div>
    </div>
<?php
        }
      }
      $conn->close();
?>
  </div>
</body>

</html>