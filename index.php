<?php
session_start();
include("vues/v_layout_entete.html") ;
if(!isset($_REQUEST['controleur']))
    $controleur = 'accueil';
else
    $controleur = $_REQUEST['controleur'];
switch($controleur)
{
    case 'accueil':
    {
        include("vues/accueil/v_accueil.php");break;
    }
    case 'qui_suis_je':
    {
        include("vues/v_qui_suis_je.html");break;
    }
    case 'tarifs':
    {
        include("vues/v_tarifs.html");break;
    }
    case 'contact':
    {
        include("vues/v_contact.html");break;
    }
}
include("vues/v_layout_pied.html") ;

?>