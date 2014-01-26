#!/bin/sh
#URL du site à sauvegarder:
url=ftp://u49242961@emmanuel-barrat.com

#Demande du pass
echo "Entrez le mot de passe FTP:"

#Désactive l'affichage du pass
stty -echo
read password
stty echo


wget -m $url --ftp-password=$password

