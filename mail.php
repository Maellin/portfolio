<?php

if (isset($_POST['envoyer-mail']))
{
	mail ("hello@ornella-mozzi.fr" , "Contact de la part de ".$_POST['nom'] , $_POST['message']."\r"."De la part de ".$_POST['mail']);
	header('Location: index.php?mail-sent=true'); 
}

else
{
	header('Location: index.php?mail-failed=true');
}
?>
