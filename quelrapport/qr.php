

<!DOCTYPE html>
<html>
    <head>
        <meta content="text/html; charset= UTF-8" />
        <link rel="stylesheet" href="qr.css" />
        <title>Quel Rapport ?</title>
    </head>
 
    <body>
      <div id="bloc_page">
    	  <?php include("header.php"); ?> 	

        <?php include('nav.php'); ?>


	     <SECTION>

          <p> <strong>Rajoutez votre<br/> Quel Rapport</strong></p>
		      <form method="post" action="soumettre.php">
              <!-- <label for="pseudo"><strong>Votre pseudo :</strong></label>
              <input type="text" placeholder="Votre pseudo" rows="2" cols="80" id="pseudo"/> -->
              <label for="titre">Titre</label> : <br/> <input type ="text" name="titre" rows="2" cols="80" id="titre" /><br/>
              <label for="message">Votre Quel Rapport</label> : <br/><textarea name="message" rows="4" cols="80" id="message"></textarea><br/>
              <input type= "submit" value= "Envoyer le QR!"/><br/><br/>
              
            </form>


          <article>
          <?php
          try
          {
          $bdd = new PDO('mysql:host=localhost;dbname=QR', 'root', 'root');
          }
          catch (Exception $e)
          { 
          die('Erreur : ' . $e->getMessage());
          }
          

          
          
          $reponse = $bdd->query('SELECT * FROM messages ORDER BY id DESC LIMIT 0,20') or die(print_r($bdd->errorInfo()));
          
          while ($donnees = $reponse->fetch()) 

          {
            echo "<strong>" . strip_tags($donnees['titre']) . ' </strong> <br/>' . strip_tags($donnees['message']) . '<br/><br/>';
          }

          $reponse->closeCursor(); 

          ?>  
	         </article>

  	      <?php include ('aside.php'); ?>
  	   </SECTION>

  	   <?php include('footer.php'); ?>
      </div> 
    </body>
</html>