<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<?php

require('connexion.inc.php'); 

// 2 préparation de la requête
// $maquery = $conn->prepare("SELECT * FROM etudiants ORDER BY nom ASC");
$maquery = $conn->prepare("SELECT * FROM sneakers ");

// 3 exécution de la requête
$maquery->execute();    
// 4 stocker les résultats dans un array
$resultat = $maquery->fetchAll(PDO::FETCH_ASSOC); 

?>

<table class="table table-striped">
<tr>
    <th>id</th>
    <th>image</th>
    <th>nom</th>
    <th>idmarque</th>
</tr>
<?php
//5 on boucle à travers les réultats

foreach ($resultat as $row) { ?>

<tr>
    <td><?php echo $row['id']; ?></td>
    <td><img src="uploads/<?php echo $row['photo']; ?>" width="50" alt="<?php echo $row['nom']; ?>" title="<?php echo $row['nom']; ?>"></td>
    <td><?php echo $row['nom']; ?></td>
    <td><?php echo $row['idmarque']; ?></td>
</tr>


 <?php } ?>
    
</body>
</html>