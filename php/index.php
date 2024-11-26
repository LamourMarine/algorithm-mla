<?php
session_start ();
if (isset($_SESSION["table"])) $table = $_SESSION['table'];
?>

<!DOCTYPE html>
<html lang="en">
    <?php
        include ("includes/head.inc.html");
    ?>
<body>
    <?php 
    include ("includes/header.inc.html");
    ?>
<div class="container">

<div class="row align-items-start">
        <nav class="col-3">
            <a class="btn btn-outline-secondary col-8" role="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false" href="index.php">
            Home</a>


<?php

if (isset($_SESSION["table"])) {
    // Si la session "table" existe, afficher la liste
    include ("includes/ul.inc.php");
}
?>
        </nav>

        <section class="col-md-9">
        <!-- <a class="btn btn-primary" href="index.php?add" role="button">Ajouter des données</a> -->


            <?php


// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Récupérer les données du formulaire
    $prenom = $_POST['prenom'] ?? '';
    $nom = $_POST['nom'] ?? '';
    $age = $_POST['age'] ?? '';
    $taille = $_POST['taille'] ?? '';
    $genre = $_POST['Civilité'] ?? '';
    $html = $_POST['html'] ?? '';
    $css = $_POST['css'] ?? '';
    $JavaScript = $_POST['JavaScript'] ?? '';
    $php = $_POST['php'] ?? '';
    $MySQL = $_POST['MySQL'] ?? '';
    $Bootstrap = $_POST['Bootstrap'] ?? '';
    $symfony = $_POST['symfony'] ?? '';
    $React = $_POST['React'] ?? '';
    $color = $_POST['color'] ?? '';
    $dob = $_POST['dob'] ?? '';
    $img = $_FILES['img'] ?? '';

    // Ajouter les données dans le tableau
    $table = [
        'prenom' => $prenom,
        'nom' => $nom,
        'age' => $age,
        'taille' => $taille,
        'genre' => $genre,
        'html' => $html,
        'css' => $css,
        'JavaScript' => $JavaScript,
        'php' => $php,
        'MySQL' => $MySQL,
        'Bootstrap' => $Bootstrap,
        'symfony' => $symfony,
        'React' => $React,
        'color' => $color,
        'dob' => $dob,
        'img' => $img

    ];
?>
<div class="alert alert-success text-center">
Données sauvegardées.
</div>
<?php
    

    $dossierImages = 'uploaded/';
    $nomImage = $dossierImages.$_FILES['img']['name'];

    if ($_FILES['img']['size'] > 2097152) {
        echo "<div class='alert alert-danger'> La taille de l'image doit-être inférieur a 2MO </div>";
    }
    else {
        move_uploaded_file($_FILES['img']['tmp_name'], $nomImage);
    }


    $_SESSION ["table"] = $table;
}


            if(isset($_GET['add'])) {
                echo "<h2 class='text-center'> Ajouter des données </h2>";
                include ("includes/form.inc.html");
            
            }

            elseif(isset($_GET['addMore'])) {
                echo "<h2 class='text-center'> Ajouter plus de données </h2>";
                include ("includes/form2.inc.php");

            }

            elseif (isset($_GET['debugging'])) {
                echo "<h2 class='text-center'> Débogage </h2>";
                echo "<h3> ===> Lecture du tableau à l'aide de la fonction print_r </h3>";
                echo "<pre>";
                print_r($_SESSION["table"]);
                echo "</pre>";
            }

            elseif (isset($_GET['concatenation'])) {
                echo "<h2 class='text-center'> Concaténation </h2>";
                echo "<h3> ===> Construction d'une phrase avec le contenu du tableau </h3>";
                echo "Mme ".$table['prenom'] ." ". $table['nom']." <br> J'ai ". $table['age'] . " ans, et je  mesure ".$table['taille'] ." m.";
                echo "<h3> ===> Construction d'une phrase après MAJ du tableau </h3>";
                echo "Mme ". ucfirst($table['prenom']) ." ". strtoupper ($table['nom'])." <br> J'ai ". $table['age'] . " ans, et je  mesure ".$table['taille'] ." m.";
                echo "<h3> ===> Affichage d'une virgule à la place du point pour la taille </h3>";
                echo "Mme ". ucfirst($table['prenom']) ." ". strtoupper ($table['nom'])." <br> J'ai ". $table['age'] . " ans, et je  mesure ". str_replace ('.', ',', $table['taille']) ." m.";



            }

            elseif (isset($_GET['boucle'])) {
                echo "<h2 class='text-center'> Boucle </h2>";
                echo "<h3> ===> Lecture d'un tableau à l'aide d'une boucle foreach </h3>";
                $i = 0;
                foreach ($table as $key => $value) {
                    echo "à la ligne n°" . $i . " correspond la clé " . $key . " et contient " . $value . "<br>";
                    $i++;
                }
                    
                
            }

            elseif (isset($_GET['Fonction'])) {
                echo "<h2 class='text-center'> Fonction </h2>";
                echo "<h3> ===> J'utilise ma fonction readTable() </h3>";
                function readTable($array, $i) {
                    foreach ($array as $key => $value) {
                        echo "à la ligne n°" . $i . " correspond la clé " . $key . " et contient " . $value . "<br>";
                        $i++;
                    }
                }
                readTable($table, 0);
            }

            elseif (isset($_GET['supprimer'])) {
                echo "<h2> Supprimer </h2>";
                session_destroy();
            }


            else {
                // Si le formulaire n'est pas affiché, montrer le bouton "Ajouter des données"
                echo '<a href="index.php?add" class="btn btn-primary btn-lg me-2">Ajouter des données</a>';
                echo '<a href="index.php?addMore" <button type="button" class="btn btn-secondary btn-lg">Ajouter plus de données</button></a>';
            }

            ?>
        </section>

    <?php
include ("includes/footer.inc.html");
?>

</body>
</html>
