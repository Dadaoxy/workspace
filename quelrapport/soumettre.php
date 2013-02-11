<?php
try
{
$bdd = new PDO('mysql:host=localhost;dbname=QR', 'root', 'root');
}
catch (Exception $e)
{ 
die('Erreur : ' . $e->getMessage());
}
          
//if (isset($_POST['titre']) AND isset($_POST['message']) AND $_POST['titre'] != '' AND $_POST['message'] != '') 
//{
$req = $bdd->prepare('INSERT INTO messages (titre, message) VALUES(?, ?)'); 
$req->execute(array($_POST['titre'], $_POST['message']));
//}
            
header('Location: qr.php');
?>