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