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

// echo'<pre>';
// var_dump($pdo);
// echo'</pre>';


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

    echo'<pre>';
    print_r($_POST);
    echo'</pre>';

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

    // INSERT INTO `annuaire` (`id_annuaire`, `nom`, `prenom`, `telephone`, `profession`, `ville`, `codepostal`, `adresse`, `date_de_naissance`, `sexe`, `description`) VALUES (NULL, 'Destina', 'Jovenel', '0635133133', 'Développeur', 'Paris', '75000', 'rue de l\'église', '02031997', 'm', 'Pour que les apprenants ne perdent jamais le \"fil du code\" pendant les cours.');

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

    // echo'<pre>';
    // print_r($req_prepare);
    // echo'</pre>';


    
}






// Début des affichages
// echo '<pre>';
// print_r($_POST);
// echo '</pre>';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Création repertoire</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container">
        <h1 class="text-center"> Répertoire</h1>
        <div class="row mt-4">
            <div class="col-sm-12">
                <form method="post" action="affichage.php" class="border p-3">
                    <div class="row">



                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="nom">Nom</label>
                                <input type="text" name="nom" id="nom" class="form-control" value="<?= $nom; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="prenom">Prénom</label>
                                <input type="text" name="prenom" id="prenom" class="form-control" value="<?= $prenom; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="tel">Téléphone</label>
                                <input type="text" name="tel" id="tel" class="form-control" value="<?= $tel; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="profession">Profession</label>
                                <input type="text" name="profession" id="profession" class="form-control" value="<?= $profession; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="ville">Ville</label>
                                <input type="text" name="ville" id="ville" class="form-control" value="<?= $ville; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="cp">Code postal</label>
                                <input type="text" name="cp" id="cp" class="form-control" value="<?= $cp; ?>">
                            </div>
                        </div>






                        <div class="col-sm-6">

                            <div class="mb-4">
                                <label for="adresse">Adresse</label>
                                <textarea name="adresse" id="adresse" class="form-control" rows="1"><?= $adresse; ?></textarea>
                            </div>

                            <div class="mb-4">
                                <label for="date_de_naissance">Date de naissance </label>
                                <input type="date" name="date_de_naissance" id="date_de_naissance" value="<?= $date_de_naissance; ?>" class="form-control">
                                <!-- <textarea name="date" id="date" class="form-control" rows="1"></textarea> -->
                            </div>

                            <div class="mb-3">
                                <label for="sexe">Sexe</label>
                                <select name="sexe" id="sexe" class="form-select">
                                    <option value="m">Homme</option>
                                    <option value="f">Femme</option>
                                </select>
                            </div>

                            <div class="mb-4">
                                <label for="adresse">Description </label>
                                <textarea name="description" id="description" class="form-control" rows="4"><?= $description; ?></textarea>
                            </div>

                            <div class="mb-3">
                                <button type="submit" id="inscription" class="w-100 btn btn-outline-primary"><i class="fa-solid fa-right-to-bracket"></i> Enregistrement <i class="fa-solid fa-right-to-bracket"></i></button>
                            </div>
                        </div>
                        <?php
                        $resultat = $pdo->query("SELECT * FROM annuaire");

                        echo '<table class="table table-bordered container">';
                        echo '<tr>';
                        echo '<th>id_annuaire</th><th>nom</th><th>prenom</th> <th>Téléphone</th> <th>profession</th><th>ville</th><th>codepostal</th><th>adresse</th><th>date_de_naissance</th><th>sexe</th><th>description</th>';
                        echo '</tr>';
                    
                        while ($ligne = $resultat->fetch(PDO::FETCH_ASSOC)) {
                            echo '<tr>';
                            foreach ($ligne as $valeur) {
                                echo '<td>' . $valeur . '</td>';
                            }
                    
                            echo '</tr>';
                        }
                    
                        echo '</table>';


                        ?>


                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>






</div>





</div>
</form>
</div>
</div>


<?php
