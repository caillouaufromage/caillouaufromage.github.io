<!-- MON SITE INTERNET PORTEFOLIO -->
<!DOCTYPE html>
<html>
<head>
    <title>Pierre AUBRY - portefolio </title>
    <link rel="icon" href="logos/drapeauFR.png">
    <!-- the file style.css contains all the style of this file -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="style.css">
</head>



<body>
    <div class="navtop">
        <div>
            <!-- EN-TÊTE -->
            <h1 id=titre data-caption="caption">Portefolio de Pierre Aubry</h1>
            <h3 id=titre data-caption="caption">Etudiant en L3 informatique à l'Université Paris-Saclay</h3>
        </div>
    </div>

    <div class="container">
        <a href="contact.html"><button class="btn">Me Contacter</button></a>
        <a href="index.php"><button class="btn">Portefolio</button></a>
        <button class="flg" style= "float:right" type="submit" ><img src= "logos/logo_github.png"></button>
    </div>

    </div>

    <br>

<!-- MES PROJETS -->
    <div class="indent_content">
        <h3 id=rubrique> Mes projets </h3>
        <hr>

        <!-- GEOMETRY DASH -->
        <br>
        <h3><img src="logos/logo_geometrydash.png" style="width:30px;height:30px;">&ensp;GeometryDash - Programmation Fonctionelle Avancée (Ocaml)</h3>
        <div id=projets>
            <div id=indent>
                <p>voir le <a target="_blank" href="documents/sujet_Geometrydash.pdf" id=lien >sujet</a></p>
                <p>voir mon <a target="_blank" href="https://github.com/caillouaufromage/GeometryDashPFA" id=lien >projet</a></p>
                <details>
                    <summary class="details">Images et détails du projet</summary>
                    <p id=binome>En binôme avec Fabio ALVES</p>
                    <p>GeometryDash-Like. On y joue un petit bonhomme qui doit avancer dans plusieurs niveaux,
                        tout en esquivant les pièges (piques, trous). 
                        Animation du personnage et des décors. 
                        Implémentation de musiques et de sons. </p>
                    <p>note: /20 </p>
                </details>
            </div>
        </div>
        <br><br><br>
        <!-- FROGGER -->
        <h3><img src="logos/logo_frogger.jpg" style="width:30px;height:30px;">&ensp;Frogger - Introduction Programmation Orientée (Java)</h3>
        <div id=projets>
            <div id=indent>
                <p>voir le <a target="_blank" href="documents/sujet_Frogger.pdf" id=lien >sujet</a></p>
                <p>voir mon <a target="_blank" href="https://github.com/caillouaufromage/Frogger" id=lien >projet</a></p>
                <details>
                    <summary class="details">Images et détails du projet</summary>
                    <p id=binome>En binôme avec Nassim ARIFETTE</p>
                    <p>Adapatation du jeu d'arcade Frogger. Une petite grenouille doit avancer le plus loin possible, 
                        tout en prenant gare aux nombreux dangers... <br> Implémentation de différrentes possibilité de Game Over: noyade et prédateur.
                        Partie chronométrée avec affichage du score à la fin. Implémentation de sons.</p>
                    <p>note: 16/20 </p>
                    <img class="imgD" src="logos/frogger1.png" alt="frogger1">
                    <img class="imgD" src="logos/frogger2.png" alt="frogger2">
                </details>
            </div>
        </div>
        <br><br><br>
        <!-- L'ÎLE INTERDITE -->
            <h3><img src="logos/logo_ileinterdite.png" style="width:30px;height:30px;">&ensp;L'île interdite - Programmation Orientée et Génie Logiciel (Java)</h3>
        <div id=projets>
            <div id=indent>
                <p>voir le <a target="_blank" href="documents/sujet_IleInterdite.pdf" id=lien>sujet</a></p>
                <p>voir mon <a target="_blank" href="https://github.com/caillouaufromage/IleInterdite" id=lien>projet</a></p>
                <details>
                    <summary class="details">Images et détails du projet</summary>
                    <p id=binome>En binôme avec Nassim ARIFETTE</p>
                    <p>description : BLABLABLABLABLABLA </p>
                    <p>note: 20/20 </p>
                </details>
            </div>
        </div>
        <br><br><br>

    </div>
    
    <footer class="footer">
    <p>&copy; Pierre AUBRY - 2023</p>
    </footer>

</body>
</html>