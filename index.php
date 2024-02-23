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
    {include("vues/v_accueil.html");break;}
}
include("vues/v_layout_pied.html") ;

?>