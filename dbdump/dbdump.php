<?php
/* Modifiez vos parametres MySQL */
$db_server   = "db981.1and1.fr";
$db_name     = "db209431337"; /* pour acceder a la base vielle de 7 jours, ajoutez -s à la fin du nom, comme ceci: NomDeLaBaseSQL-s */
$db_username = "dbo209431337";
$db_password = "pvCJqNDw";
$db_charset = "utf8"; /* mettre utf8 ou latin1 */
/* C'est tout. Placez ce fichier par FTP quelque part sur votre serveur Web, dans un endroit discret. */
/* Puis ouvrez-le avec votre navigateur web et suivez les instructions. */

echo "<html><body>Ce script cree une sauvegarde de la base de donnees avec l'encodage du jeu de caracteres $db_charset .  \n<br>\n<br>Le fichier de sauvegarde est au meme endroit que ce script.  \n<br>\n<br>";
echo "Votre base est en cours de sauvegarde.......\n<br>";
if (system("mysqldump --host=$db_server --user=$db_username --password=$db_password -C -Q -e --default-character-set=$db_charset $db_name | gzip -c > $db_name-$db_charset.sql.gz"));
echo "\n<br>";
echo "C'est fini. Vous pouvez recuperer le fichier de sauvegarde. Il s'appelle: <a href=\"$db_name-$db_charset.sql.gz\">$db_name-$db_charset.sql.gz</a> (faites un clic-droit, et enregistrez sous... , ou enregistrez la cible du lien sous...) \n<br>\n<br>N'oubliez pas d'effacer ce fichier de votre serveur par FTP car il contient des mots de passe.\n<br>\n<br></body></html>";
echo realpath('dbdump.php');
?> 
