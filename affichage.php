<?php

$host = 'mysql:host=localhost;dbname=repertoire';
$login = 'root';
$password = ''; // root sur MAMP
$options = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, // gestion des erreurs
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8' // pour forcer l'utf-8
);

// on crée notre objet :
$pdo = new PDO($host, $login, $password, $options);

$nom = '';
$prenom = '';
$tel = '';
$profession = '';
$sexe = '';
$ville = '';
$cp = '';
$adresse = '';
$description = '';
$date_de_naissance = '';



if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['tel']) && isset($_POST['profession']) && isset($_POST['sexe']) && isset($_POST['ville']) && isset($_POST['cp']) && isset($_POST['adresse']) && isset($_POST['date_de_naissance']) && isset($_POST['description'])) {

    echo '<pre>';
    print_r($_POST);
    echo '</pre>';

    $nom = trim($_POST['nom']);
    $prenom = trim($_POST['prenom']);
    $tel = trim($_POST['tel']);
    $profession = trim($_POST['profession']);
    $sexe = trim($_POST['sexe']);
    $ville = trim($_POST['ville']);
    $cp = trim($_POST['cp']);
    $adresse = trim($_POST['adresse']);
    $date_de_naissance = trim($_POST['date_de_naissance']);
    $description = trim($_POST['description']);


    $req_prepare = $pdo->prepare("INSERT INTO annuaire (id_annuaire, nom, prenom, telephone, profession, ville, codepostal, adresse, date_de_naissance, sexe, description)VALUES (NULL, :nom, :prenom, :tel, :profession, :ville, :codepostal, :adresse, :date_de_naissance, :sexe, :description)");

    $req_prepare->bindParam(':nom', $nom, PDO::PARAM_STR);
    $req_prepare->bindParam(':prenom', $prenom, PDO::PARAM_STR);
    $req_prepare->bindParam(':tel', $tel, PDO::PARAM_STR);
    $req_prepare->bindParam(':profession', $profession, PDO::PARAM_STR);
    $req_prepare->bindParam(':ville', $ville, PDO::PARAM_STR);
    $req_prepare->bindParam(':codepostal', $cp, PDO::PARAM_STR);
    $req_prepare->bindParam(':adresse', $adresse, PDO::PARAM_STR);
    $req_prepare->bindParam(':date_de_naissance', $date_de_naissance, PDO::PARAM_STR);
    $req_prepare->bindParam(':sexe', $sexe, PDO::PARAM_STR);
    $req_prepare->bindParam(':description', $description, PDO::PARAM_STR);
    $req_prepare->execute();

}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>affichage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>

<h1 class="mt-3 text-center">Affichage Repertoire</h1>
    <?php $resultat = $pdo->query("SELECT * FROM annuaire"); ?>
    <table class="table table-bordered container mt-3">
        <tr class="bg-primary">
            <th>id_annuaire</th>
            <th>nom</th>
            <th>prenom</th>
            <th>Téléphone</th>
            <th>profession</th>
            <th>ville</th>
            <th>codepostal</th>
            <th>adresse</th>
            <th>date_de_naissance</th>
            <th>sexe</th>
            <th>description</th>
        </tr>
        <?php


        while ($ligne = $resultat->fetch(PDO::FETCH_ASSOC)) {
            echo '<tr>';
            foreach ($ligne as $valeur) {
                echo '<td>' . $valeur . '</td>';
            }

            echo '</tr>';
        }


        ?>
    </table>
    <?php $resultat = $pdo->query("SELECT * FROM annuaire"); ?>
    <p>Nombre de contact total est de: <?php echo $resultat->rowCount(); ?> Lignes </p>
    <div class="container">

    <h1>Le nombre de femmes </h1>
    <?php $resultat = $pdo->query("SELECT * FROM annuaire WHERE sexe ='f' "); ?>
    <table class="table table-bordered container mt-3">
        <tr class="bg-primary">
            <th>id_annuaire</th>
            <th>nom</th>
            <th>prenom</th>
            <th>Téléphone</th>
            <th>profession</th>
            <th>ville</th>
            <th>codepostal</th>
            <th>adresse</th>
            <th>date_de_naissance</th>
            <th>sexe</th>
            <th>description</th>
        </tr>
        <?php


        while ($ligne = $resultat->fetch(PDO::FETCH_ASSOC)) {
            echo '<tr>';
            foreach ($ligne as $valeur) {
                echo '<td>' . $valeur . '</td>';
            }

            echo '</tr>';
        }


        ?>
    </table>

    <?php $resultat = $pdo->query("SELECT * FROM annuaire WHERE sexe = 'f' "); ?>
    <p>Le nombre de femme est : <?php echo $resultat->rowCount(); ?> au total </p>


    <h1 class="text-center">Le nombre d'homme dans le repertoire </h1>
    <?php $resultat = $pdo->query("SELECT * FROM annuaire WHERE sexe ='m' "); ?>
    <table class="table table-bordered container mt-3">
        <tr class="bg-primary">
            <th>id_annuaire</th>
            <th>nom</th>
            <th>prenom</th>
            <th>Téléphone</th>
            <th>profession</th>
            <th>ville</th>
            <th>codepostal</th>
            <th>adresse</th>
            <th>date_de_naissance</th>
            <th>sexe</th>
            <th>description</th>
        </tr>
        <?php


        while ($ligne = $resultat->fetch(PDO::FETCH_ASSOC)) {
            echo '<tr>';
            foreach ($ligne as $valeur) {
                echo '<td>' . $valeur . '</td>';
            }

            echo '</tr>';
        }


        ?>
    </table>

    <?php $resultat = $pdo->query("SELECT * FROM annuaire WHERE sexe = 'm' "); ?>
    <p>Le nombre d'homme' est : <?php echo $resultat->rowCount(); ?> au total </p>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>