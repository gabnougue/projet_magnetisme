<?php
$subjectFirstname = $_POST['subject-first-name'];
$subjectLastname = $_POST['subject-last-name'];
$subjectEmail = $_POST['subject-email'];
$subjectPhone = $_POST['subject-phone'];

$destinataire = 'gabnougue@gmail.com';
$expediteur = $_POST['subject-email'];
$objet = $_POST['objet'];
$headers  = 'MIME-Version: 1.0' . "\n";
$headers .= 'Content-type: text/html; charset=ISO-8859-1'."\n";
$headers .= 'From: "'.$subjectFirstname.' '.$subjectLastname.'"<'.$expediteur.'>'."\n";
$message = '<div style="width: 100%; text-align: center; font-weight: bold">Voici mon numéro de téléphone : '.$subjectPhone.'! <br>'.$_POST['message'].'</div>';

if (mail($destinataire, $objet, $message, $headers)) {
    echo 'success'; // Réponse en cas de succès
} else {
    echo 'error'; // Réponse en cas d'erreur
}
?>
