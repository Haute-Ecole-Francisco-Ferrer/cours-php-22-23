
<?php
session_start();
if(isset($_SESSION['username'])) {
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="deconnexion.php">déconnexion</a>
    <h2>Bienvenue <?php echo $_SESSION['username']; ?></h2>
</body>
</html>


<?php
}  else {
     header('location: index.php?msg=connexionnecessaire');
}
?>
