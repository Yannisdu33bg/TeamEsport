<?php
require_once('connect.php')
?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/style.css" rel="stylesheet">
    <title> Team E-Sport</title>
    
</head>

<body>

    <a id="direcindex" href="../index.php">
        <?php
        include('Header.php');
        ?>
    </a>
    <style>
        * {
/* Here i made the margin and padding  0 */
  margin: 0; 
  
    padding: 0;
}
  
.navbar {
    display: flex;
  
/* This is used to make the navbar sticky, So that the
    navbar stays at the top part even if we scroll */
    position: sticky; 
    align-items: center;
    justify-content: center;
    top: 0px;
  
/*it specifies the mouse cursor to be displayed
    when it is pointed over the element */
    cursor: pointer;
}
  
.nav-list {
    display: flex;
}
  
.nav-list li {
    list-style: none;
    padding: 26px 30px;
}
  
.nav-list li a {
    text-decoration: none;
    color: white;
}

#accueil {
    color: red;
    font-size: 20px;
}
  
.nav-list li a:hover {
    color: black;
}
  
.rightNav {
    width: 50%;
    text-align: right;
}
  
.background {
    background-color: purple;
    background-blend-mode: darken;
    background-size: cover;
}
.nav-list li a:active {
    color: green;
}
  
      </style>
        <nav class="navbar background">
            <ul class="nav-list">
                <li><a id = "accueil" href="../index.php">ACCUEIL</a></li>
                <li><a href="PageJalon.php?id=<?= 1 ?>">CAHIER DES CHARGES</a></li>
                <li><a href="PageJalon.php?id=<?= 2 ?>">ETAT DE LA SALLE</a></li>
                <li><a href="PageJalon.php?id=<?= 3 ?>">RECHERCHE DE JOUEURS</a></li>
                <li><a href="PageJalon.php?id=<?= 4 ?>">COMMANDES DES PC</a></li>
                <li><a href="PageJalon.php?id=<?= 5 ?>">CONSTRUCTION DES EQUIPES</a></li>
                <li><a href="PageJalon.php?id=<?= 6 ?>">LIVRABLES ET HYPOTHESES</a></li>
                <li><a href="PageJalon.php?id=<?= 7 ?>">VERIFICATION DES HYPOTHESES</a></li>
                <li><a id = "lienplanvert" href="../index.php#planvert">PLAN VERT</a></li>
            </ul>
        </nav>

    <?php
    if (isset($_GET['id']))
    {
            $id = $_GET['id'];
            $sql = "SELECT * FROM jalon WHERE jalon_id='$id'";
            $res = $bdd->query($sql);
            $ligne=$res->fetch();

            $titre = $ligne['jalon_titre'];
            $image=$ligne['jalon_image'];
            $resume = $ligne['jalon_resume'];
            $debut = $ligne['jalon_debut'];
            $fin=$ligne['jalon_fin'];
            $lien=$ligne['jalon_lien'];
            ?>
    <main>
        <div class="gauchevsdroite">
            <div class="highflexgrow petitfond centre">
                <h2><?=$titre?></h2>
                <img id="image_page_jalon" src="../images/<?=$image?>" alt="image d'ordinateur">
            </div>
            <div class="temps petitfond">
                <h2>Temps pris:</h2>
                </br></br></br></br>
                <h3 id="debutjalon">
                    <?=$debut?>
                </h3></br>

                <img class="fleche" src="../images/fleche descendante.jpg" alt="image flèche">
                </br>
                <h3 id="finjalon">
                    <?=$fin?>
                </h3>
            </div>
        </div>
        <div class="petitfond">
        <h2 class="centre">Description
        </h2>
</br>
        <p>
            <?=$resume?>
        </p>
        </br>
        </div>
            <?php
            if($id == "6"){?>
                </br>
                <div class="centre">
                    <a class="bouton" href="<?=$lien?>performance.pdf">
                    En savoir plus sur le livrable traitant de la performance
                    </a>
                </div>
                </br>
                </br>
                <div class="centre">
                    <a class="bouton" href="<?=$lien?>profilstypes.pdf">
                    En savoir plus sur le livrable traitant des profils types
                    </a>
                </div>
            <?php
            } else {
            ?>
            <div class="centre">
                <a class="bouton" href="<?=$lien?>">
                En savoir plus
                </a>
            </div>
            <?php
            }
            ?>
        </div>

    </main>
    <?php }?>

</body>

</html>