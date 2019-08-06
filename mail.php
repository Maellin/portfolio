<?php

    include 'index.php';


if (isset($_POST['envoyer-mail']))
{
	mail ("mozzi.ornella@gmail.com" , "Contact de la part de ".$_POST['nom'] , $_POST['message']."\r"."De la part de ".$_POST['mail']);
}

else
{
	echo('Vous n\'avez pas envoyé le mail');
}
?>