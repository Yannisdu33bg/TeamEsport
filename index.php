<?php
require_once('fichiersPHP/connect.php')
?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <?php
    include('fichiersPHP/Header.php');
    ?>
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
    color: black;
}
  
      </style>
        <nav class="navbar background">
            <ul class="nav-list">
                <li><a href="fichiersPHP/PageJalon.php?id=<?= 1 ?>">CAHIER DES CHARGES</a></li>
                <li><a href="fichiersPHP/PageJalon.php?id=<?= 2 ?>">ETAT DE LA SALLE</a></li>
                <li><a href="fichiersPHP/PageJalon.php?id=<?= 3 ?>">RECHERCHE DE JOUEURS</a></li>
                <li><a href="fichiersPHP/PageJalon.php?id=<?= 4 ?>">COMMANDES DES PC</a></li>
                <li><a href="fichiersPHP/PageJalon.php?id=<?= 5 ?>">CONSTRUCTION DES EQUIPES</a></li>
                <li><a href="fichiersPHP/PageJalon.php?id=<?= 6 ?>">LIVRABLES ET HYPOTHESES</a></li>
                <li><a href="fichiersPHP/PageJalon.php?id=<?= 7 ?>">VERIFICATION DES HYPOTHESES</a></li>
                <li><a id = "lienplanvert" href="#planvert">PLAN VERT</a></li>
            </ul>
        </nav>

    <main>
        <div>
            <h2> Les grandes étapes du projet : <h2>
            </br>
        </div>
        <div id="jalonContainer">
            <?php
            $sql = "SELECT * FROM jalon";
            $res = $bdd->query($sql);
            while ($ligne = $res->fetch()) {
                $id = $ligne['jalon_id'];
                $titre = $ligne['jalon_titre'];
                $image = $ligne['jalon_image'];
            ?>

                <a class="jalon" href="fichiersPHP/PageJalon.php?id=<?= $id ?>">
                    <img src="images/<?= $image ?>" alt="image de cahier des charges">
                    <h3><?= $titre ?></h3>
                </a>
            <?php
            }
            ?>

            

        </div>

        <div class = "petitfond">
            <h3 id="planvert" class = "planvert">Plan vert :</h3>
            <p>
            Former une équipe de joueurs est un enjeu sociétal qui touche un public divers et varié. Ce projet n’exclue personne et s’oppose aux discriminations raciales, de sexe, de culture etc. La prise en compte des principes de diversité culturelle et d’égalité des chances est sous-entendue, car aucun jugement de valeur n’est attribué aux futurs joueurs souhaitant faire partie du projet.
            </br>
Quant à la restauration du matériel informatique, les choix les plus judicieux ont été effectués. L’acquisition des nouveaux ordinateurs permet de satisfaire la demande, mais elle permet également de rajeunir le matériel pour une très longue durée. L’idée est d’investir dans du matériel de qualité ce qui permettra de le renouveler moins souvent et donc d’économiser des ressources matérielles de différentes formes. De plus, les ordinateurs étant fixes et non portables, il sera beaucoup plus simple de changer un composant précis en cas de besoin. Cela serait plus compliqué sur un ordinateur portable, où au moindre problème matériel, il est souvent nécessaire de changer de machine. Cette solution permet d’effectuer des économies supplémentaires.
        </br>
Notre projet s'inscrit donc dans la politique de Développement Durable et de Responsabilité Sociale définie par le plan vert.
            </p>
        </div>
    </main>
    <?php
    include('fichiersPHP/footer.php');
    ?>
</body>

</html>