<?php
  session_start();
?>

    left: 725px;
}
.input{
  margin-top:-20px;
  box-shadow: 2px 2px rgba(0,0,0.5)-2px -2px 4px rgba(128,120,64,0.5);
  }
  input:hover{
    border: 1px solid #ccc;
  -moz-box-shadow:0 0 20px #ccc;
  -webkit-box-shadow:0 0 20px #ccc;
  box-shadow: 0 0 20px #ccc;
  }
  .hr {
    width: 1130px;
    padding:0px;
    top:50px;
    margin-block-end:70px;
  }
  .barresimages {
    margin-right: 30px;
    margin-left: px;
    stroke-opacity: .4;
    margin-top: -60px;
}
div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 180px;
  margin-top:-55px;
  box-shadow: 2px 2px rgba(0,0,0.5)-2px -2px 4px rgba(128,120,64,0.5);
}

div.gallery:hover {
  border: 1px solid #ccc;
  -moz-box-shadow:0 0 20px #ccc;
  -webkit-box-shadow:0 0 20px #ccc;
  box-shadow: 0 0 20px #ccc;

  
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 20px;
  text-align: center;
 
}
</style>

</head>

<body>
    <div classe="en-tete">
    <form action="index2.php" method="get"><br><br>
        <img src="images/logo.png" alt="logo google" class="logo">
        <img src="images/search.svg" alt="loupe transparente" class="loupegrise">
        <input type="text" name="recherche" id="recherche" class="input">
        <img src="images/louperachat.png" alt="loupe" class="loupebleue" width="20px">
        <img src="images/vs.png" alt="micro" class="microphone">
        <img src="images/cam.png" alt="camera" class=cam>
        <input type='image' name='recherche' src="images/louperachat.png" class="loupebleue">
    </div>



    <div class="recherche">
        <a href="#">
            <i class="bi bi-search"></i> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
              </svg> ALL
        </a>


        <a href="#">
            <i class="bi bi-image"></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-image" viewBox="0 0 16 16">
                <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                <path d="M2.002 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-12zm12 1a1 1 0 0 1 1 1v6.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12V3a1 1 0 0 1 1-1h12z"/>
              </svg> Images
        </a>

        <a href="#">
            <i class="bi bi-play-btn"></i> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-play-btn" viewBox="0 0 16 16">
                <path d="M6.79 5.093A.5.5 0 0 0 6 5.5v5a.5.5 0 0 0 .79.407l3.5-2.5a.5.5 0 0 0 0-.814l-3.5-2.5z"/>
                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm15 0a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z"/>
              </svg> Videos
        </a>

        <a href="#">
            <i class="bi bi-geo-alt"></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
              </svg> Maps
        </a>

        <a href="#">
            <i class="bi bi-newspaper"></i> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-newspaper" viewBox="0 0 16 16">
                <path d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5v-11zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5H12z"/>
                <path d="M2 3h10v2H2V3zm0 3h4v3H2V6zm0 4h4v1H2v-1zm0 2h4v1H2v-1zm5-6h2v1H7V6zm3 0h2v1h-2V6zM7 8h2v1H7V8zm3 0h2v1h-2V8zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1z"/>
              </svg> News
        </a>

        <a href="#">
            <i class="bi bi-three-dots-vertical"></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
              </svg> More
        </a>
    </div>


    <div>
        <hr class="hr">
    </div>

    <div class="barresimages">
        <div class="bar1">
            <img src="images/Bleuet.jpg" alt="fleur" class="bouquet2">
            <span>Cerisier</span>
        </div>

            <div class="bar2">
                <img src="images/acacia.jpg" alt="fleur" class="soleil">
                <span>Acacia</span>
            </div>

                <div class="bar3">
                    <img src="images/coquelicot.jpg" alt="fleur" class="gaedenia">
                    <span>Coquelicot</span>
                </div>

                    <div class="bar4">
                        <img src="images/jasmin.jpg" alt="fleur" class="maguerite">
                        <span>jasmine</span>
                    </div>

                        <div class="bar5">
                            <img src="images/poinsettia.jpg" alt="fleur" class="poinsettia">
                            <span>poinsettia</span>
                        </div>

                            <div class="bar6">
                                <img src="images/jonquille.jpg" alt="fleur" class="rose">
                                <span>jonquille</span>
                            </div>
                           </div>

      
        
</div>

        

 <?php
 //Inclusion de la connexion ?? la BD
 include 'connection.php';

//R??cup??rer l'image ?? partir du base de donn??es 
if (isset($_GET['search'])){

$recherche = $_GET['search'];
          $check = "SELECT*FROM info_fleurs
           LEFT JOIN info_image
           ON info_fleurs.idfleurs=info_image.idinfo_images WHERE nomfleurs='$recherche'"; 
      
      $result = mysqli_query($conn, $check); 
      if (mysqli_num_rows($result)> 0) {
        while($row = mysqli_fetch_assoc($result)){
          include 'index.php';
          
  
    // echo "<img src='".$row['lienfleurs']. "';>" ;
  
          
         
    $idinfo_images=$row['idinfo_images'];      
$idfleurs = $row['idfleurs'];
$lienfleurs = $row['lienfleurs'];
$nomfleurs = $row['nomfleurs'];
$typefleurs = $row['typefleurs'];
$desc_fleurs= $row['desc_fleurs'];
$date_enre_fleurs = $row['date_enre_fleurs'];

        }
 
}else{         
            echo'image non trouv??e';   
          }
        }
         
      
          $conn->close();
          
         
              



?>
</body>

</html>