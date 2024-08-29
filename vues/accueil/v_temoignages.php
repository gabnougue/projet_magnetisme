<?php
$COMMENTAIRES = [
    [
        "user" => "Yann Seyrac",
        "url" => "https://www.google.com/maps/contrib/114759727714287227825/reviews/@43.3581804,-1.554588,17z/data=!3m1!4b1!4m3!8m2!3m1!1e1?hl=fr&entry=ttu&g_ep=EgoyMDI0MDgyMS4wIKXMDSoASAFQAw%3D%3D",
        "picture" => "assets/img/profil-homme.png",
        "date" => "juin 2022",
        "commentaire" => "Une belle personne, aux dons merveilleux, et qui m'a beaucoup apporté. Que du positif, malgré mes réticences cartésiennes ! Pour les petits et gros bobos de l'âme et du corps, une aide précieuse."
    ],
    [
        "user" => "Marina Mazazolina",
        "url" => "https://www.google.com/maps/contrib/100327306348651531338/place/ChIJLxhLyEIXUQ0RK3r5wx8PaA4/@43.3572936,-1.5551278,15z/data=!4m6!1m5!8m4!1e1!2s100327306348651531338!3m1!1e1?hl=fr&entry=ttu&g_ep=EgoyMDI0MDgyMS4wIKXMDSoASAFQAw%3D%3D",
        "picture" => "assets/img/profil-femme.png",
        "date" => "juillet 2022",
        "commentaire" => "Jean-Michel est une personne extraordinaire ! Je ne connaissais pas avant l'effet de \"magnitiseur\" et je ne faisais pas confiance... C'était une agréable découverte, Jean Michel a une énergie de guérisseur, il est à l'écoute et donne des conseils comme s'il a vraiment vécu la situation."
    ],
    [
        "user" => "Pascale Mellado",
        "url" => "https://www.google.com/maps/contrib/105256077670977917520/place/ChIJLxhLyEIXUQ0RK3r5wx8PaA4/@43.3563433,-1.5457551,14z/data=!4m6!1m5!8m4!1e1!2s105256077670977917520!3m1!1e1?hl=fr&entry=ttu&g_ep=EgoyMDI0MDgyMS4wIKXMDSoASAFQAw%3D%3D",
        "picture" => "assets/img/profil-femme-blonde.png",
        "date" => "septembre 2020",
        "commentaire" => "Un grand Merci à Jean-Michel, un magnetiseur qui utilise ses dons avec gentillesse et bienveillance. C'est vraiment bluffant. J'ai ressenti du bien etre et une légèreté immédiate. Merci encore."
    ]
];
?>

<h2>Témoignages</h2>
    <div class="temoignages-container">
        <div class="slider">
            <div class="fleche">
                <img src="assets/img/fleche.png" alt="fleche">
            </div>
            <div class="avis-container">
                <?php foreach ($COMMENTAIRES as $commentaire): ?>
                    <div class="avis">
                        <div class="user">
                            <img class="profil" src="<?= $commentaire['picture'] ?>" alt="profil"/>
                            <a href="<?= $commentaire['url'] ?>" target="_blank">
                                <h3><?= $commentaire['user'] ?><img class="redirection-icon" src="assets/img/share.png" alt="share"/></h3>
                            </a>
                        </div>
                        <div class="rating">
                            <img class="etoiles" src="assets/img/cinq-etoiles.png" alt="cinq-etoiles"/>
                            <p>(<?= $commentaire['date'] ?>)</p>
                        </div>
                        <p class="commentaire"><?= $commentaire['commentaire'] ?></p>
                        <br/><br/>
                        <a class="pc lien-autres-temoignages" href="https://www.google.com/search?sca_esv=7679535431bada9b&hl=fr-FR&gl=fr&sxsrf=ADLYWIJPmdzFv4NpTBXi-UhousgSizx71Q:1724609946702&q=magn%C3%A9tiseur+.accompagnateur+au+changement+saint-p%C3%A9e-sur-nivelle+avis&uds=ADvngMiGXPAdMgKwYBt-08K49q4L-m4UsvVO6-JJTw2eKwroXBqjyVVVPlQZdqhGu09GLrVoHEMtu4WJa8gmspI9XWnpH24wA4CLq2StQ0PsI-MlXHUC3kG6e7c6w9gyKSUJdigLLJPhE0yf5ryUO-s7Tcd5C7sQLFXvkVq_WIUjzUsvK5Lnm3cn7b3kwEJXPebPe_L5M60kXHvVbx9_ZvtSof4sTdiE-AI6ekUwGl-yEYmA4n-JJbuBSDijqdlzCMe1zmq6-j_F&si=ACC90nwO9xEzySNrBbeVuYhtSl5s84rzWVZlRreGH3L-IdoVybOPGo_7z_CvDm1yog9fpK_NnmmwzCu3_71t4Qmk_yyXxbmAC6bitMmXUGMbgrxpbiAsVd4MOllbMWNR5bGJtvddr3ElrnBx-JJG4sERD2tRtJVETOfv9PgzzYownnDR_5y9v1ErtPjZVcNyfOWlXaf6fknvoQeS89ifjr97cQqptJzeew%3D%3D&sa=X&ved=2ahUKEwjd8v7Z4JCIAxVfUaQEHXSWKqYQxKsJegQICRAB&ictx=1&biw=1920&bih=911&dpr=1" target="_blank">
                            <div class="autres-temoignages">
                                <p>Voir plus de témoignages</p>
                                <img class="fleche-droite" src="assets/img/fleche-droite.png" alt="fleche-droite"/>
                            </div>
                        </a>
                        <a class="mobile lien-autres-temoignages" href="https://www.google.com/search?sca_esv=7679535431bada9b&hl=fr-FR&gl=fr&sxsrf=ADLYWIJPmdzFv4NpTBXi-UhousgSizx71Q:1724609946702&q=magn%C3%A9tiseur+.accompagnateur+au+changement+saint-p%C3%A9e-sur-nivelle+avis&uds=ADvngMiGXPAdMgKwYBt-08K49q4L-m4UsvVO6-JJTw2eKwroXBqjyVVVPlQZdqhGu09GLrVoHEMtu4WJa8gmspI9XWnpH24wA4CLq2StQ0PsI-MlXHUC3kG6e7c6w9gyKSUJdigLLJPhE0yf5ryUO-s7Tcd5C7sQLFXvkVq_WIUjzUsvK5Lnm3cn7b3kwEJXPebPe_L5M60kXHvVbx9_ZvtSof4sTdiE-AI6ekUwGl-yEYmA4n-JJbuBSDijqdlzCMe1zmq6-j_F&si=ACC90nwO9xEzySNrBbeVuYhtSl5s84rzWVZlRreGH3L-IdoVybOPGo_7z_CvDm1yog9fpK_NnmmwzCu3_71t4Qmk_yyXxbmAC6bitMmXUGMbgrxpbiAsVd4MOllbMWNR5bGJtvddr3ElrnBx-JJG4sERD2tRtJVETOfv9PgzzYownnDR_5y9v1ErtPjZVcNyfOWlXaf6fknvoQeS89ifjr97cQqptJzeew%3D%3D&sa=X&ved=2ahUKEwjd8v7Z4JCIAxVfUaQEHXSWKqYQxKsJegQICRAB&ictx=1&biw=1920&bih=911&dpr=1" target="_blank">
                            <div class="autres-temoignages">
                                <p>Voir plus de témoignages</p>
                                <img class="fleche-droite" src="assets/img/fleche-droite.png" alt="fleche-droite"/>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="fleche">
                <img src="assets/img/fleche.png" alt="fleche">
            </div>
        </div>
    </div>
    <div class="nb-diapo">
        <img class="cercle-plein" src="assets/img/cercle.png" alt="cercle-plein"/>
        <?php for ($i = 0; $i < count($COMMENTAIRES); $i++): ?>
            <img class="cercle-vide<?= $i + 1 ?>" src="assets/img/cercle-vide.png" alt="cercle-vide"/>
        <?php endfor; ?>
    </div>
    <div class="laisser-avis">
        <p>Partagez votre expérience en laissant un avis sur <strong>Google</strong>.</p>
        <div class="btn-avis pc">
            <img src="assets/img/google.png"/>
            <a href="https://www.google.com/search?q=magn%C3%A9tiseur+.accompagnateur+au+changement+saint-p%C3%A9e-sur-nivelle+avis&sca_esv=564275991&hl=fr-FR&gl=fr&sxsrf=AB5stBhEORcLGe_RupckB4vES-s1nGqNWQ%3A1694415553877&ei=wbr-ZMaPNbm2hbIPoeCFgAs&ved=0ahUKEwiG9MLp_aGBAxU5W0EAHSFwAbAQ4dUDCBA&uact=5&oq=magn%C3%A9tiseur+.accompagnateur+au+changement+saint-p%C3%A9e-sur-nivelle+avis&gs_lp=Egxnd3Mtd2l6LXNlcnAiRm1hZ27DqXRpc2V1ciAuYWNjb21wYWduYXRldXIgYXUgY2hhbmdlbWVudCBzYWludC1ww6llLXN1ci1uaXZlbGxlIGF2aXNIAFAAWABwAHgAkAEAmAEAoAEAqgEAuAEDyAEA4gMEGAAgQQ&sclient=gws-wiz-serp#lrd=0xd511742c84b182f:0xe680f1fc3f97a2b,3,,,," target="_blank">Rédiger un commentaire</a>
        </div>
        <div class="btn-avis mobile">
            <img src="assets/img/google.png"/>
            <a href="https://www.google.com/search?hl=fr-FR&gl=fr&q=magn%C3%A9tiseur+.accompagnateur+au+changement+saint-p%C3%A9e-sur-nivelle+avis&ludocid=1038096343215209003&lsig=AB86z5V_iUHyjexhFy42VX_7JYOd&si=ACFMAn-JlfkjHh0ezdNAbIMBZMsz2pZUCvXAg_gwiJ8w9ZZwYsOQjMfQr7TwYr9M8uh75wFPV3NdLh_WzcsKvvtDssZSyFY6F1hJDFXYNTbWiQgndw-_LC6CWRdK9b-f9qmeM-T5S2kfu0kKMXHlA2rzUrsj5suPTDl5iq-tf4RaXn9I0P2XDCug1mrsqOVllRlCGXifZ87iOy2mq_grOmZiIGfmEpfYtQ%3D%3D&ictx=1&ved=2ahUKEwi-0eXs6aKBAxVtTaQEHS7eBwEQyNoBKAJ6BAgoEAk#lrd=0xd511742c84b182f:0xe680f1fc3f97a2b,1" target="_blank">Rédiger un commentaire</a>
        </div>
    </div>

    <script src="js/accueil/carousel-accueuil.js"></script>