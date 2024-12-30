<!DOCTYPE html>
<html lang="fr">
<head>
  <!-- Métadonnées pour la page web -->
  <meta charset="UTF-8"> <!-- Encodage des caractères -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Adaptation sur mobile -->
  <title>Mon portfolio - Valentin Vautier</title> <!-- Titre de la page -->
  <link rel="icon" type="image/png" href="img/logoweb.png"> <!-- Icône de la page -->
  <link rel="stylesheet" type="text/css" href="style.css"> <!-- Lien vers le fichier CSS -->
</head>
<body>

  <!-- En-tête du site -->
  <header>
    <h1>Valentin Vautier</h1> <!-- Nom de la personne -->
    <p>Étudiant en BTS à Caensup Sainte Ursule</p> <!-- Description du rôle actuel -->
  </header>

  <!-- Navigation principale -->
  <nav>
    <ul>
      <!-- Liens de navigation vers différentes sections de la page -->
      <li><a href="#accueil">Accueil</a></li>
      <li><a href="#a-propos">À propos</a></li>
      <li><a href="#competences">Compétences</a></li>
      <li><a href="#realisation">Réalisation</a></li>
      <li><a href="#experiences">Expérience</a></li>
      <li><a href="#formations">Formation</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>
  </nav>

  <!-- Contenu principal de la page -->
  <main>
  
    <!-- Section d'accueil -->
    <section id="accueil">
      <h2>Accueil</h2>
      <p>Bienvenue sur mon portfolio en ligne. Je suis Valentin Vautier, étudiant en alternance en BTS SIO. Sur cette page, vous trouverez un aperçu de mon parcours professionnel et de mes compétences.</p>
    </section>

    <!-- Section À propos -->
    <section id="a-propos">
      <h2>À propos</h2>
      <p>Je suis étudiant en alternance en BTS SIO à Caensup Sainte Ursule, spécialité réseaux. J'ai 18 ans, né le 26 juin 2006 à Coutances. Je suis passionné de football.</p>
    </section>

    <!-- Section Compétences -->
    <section id="competences">
      <h2>Compétences</h2>

      <!-- Compétence HTML -->
      <div class="competence">
        <p>HTML</p>
        <div class="competence-container">
          <div class="skill-bar">
            <div class="skill-bar-fill" style="width: 70%;">70%</div> <!-- Barre de compétence HTML -->
          </div>
        </div>
      </div>

      <!-- Autres compétences avec des barres similaires -->
      <div class="competence">
        <p>CSS</p>
        <div class="competence-container">
          <div class="skill-bar">
            <div class="skill-bar-fill" style="width: 60%;">60%</div>
          </div>
        </div>
      </div>

      <div class="competence">
        <p>PHP</p>
        <div class="competence-container">
          <div class="skill-bar">
            <div class="skill-bar-fill" style="width: 50%;">50%</div>
          </div>
        </div>
      </div>

      <div class="competence">
        <p>YAML</p>
        <div class="competence-container">
          <div class="skill-bar">
            <div class="skill-bar-fill" style="width: 55%;">55%</div>
          </div>
        </div>
      </div>

      <!-- Section Certification -->
      <div class="certification">
        <h3>Certification</h3>
        <p><strong>Certification obtenue :</strong> SecNumAcademie - Formation en cybersécurité (Certification validée)</p>
        <a href="img/certifsecnum.pdf" target="_blank">Télécharger mon certificat SecNumAcademie (PDF)</a> <!-- Lien pour télécharger la certification -->
        <p><a href="https://www.secnumacademie.gouv.fr/" target="_blank">En savoir plus sur SecNumAcademie</a></p> <!-- Lien vers le site de la certification -->
      </div>
    </section>

    <!-- Section Réalisation -->
    <section id="realisation">
      <h2>Réalisation</h2>
      <p>Réalisation de mon portfolio personnel, conçu en HTML, CSS et PHP. Cette plateforme présente mes compétences et mes expériences professionnelles, permettant ainsi aux recruteurs de mieux me connaître.</p>
      <img src="img/portfolio.png" alt="Capture d'écran du portfolio de Valentin Vautier" class="photo-profil" width="400"> <!-- Image du portfolio -->

      <h3>Exercice Interactif</h3>
      <p>Un exercice simple réalisé en HTML, CSS et JavaScript : un bouton pour changer la couleur de fond de la page et un autre pour revenir au fond de base.</p>

      <!-- Boutons interactifs -->
      <button id="changeColorButton">Changer la couleur de fond</button>
      <button id="resetColorButton">Revenir au fond de base</button>
    </section>

    <!-- Section Expériences -->
    <section id="experiences">
      <h2>Expériences</h2>
      <p>Alternance à Daltoner pour 2 ans, Saint-Lô</p>
      <p>8 semaines de stage à SPID'Informatique, La Haye</p>
      <p>8 semaines de stage à Teknic'Info, Valognes</p>
    </section>

    <!-- Section Formations -->
    <section id="formations">
      <h2>Formations</h2>
      <p>Études supérieures niveau BTS SIO en alternance à Caensup Sainte Ursule</p>
      <p>Lycée Charles Tellier avec le Bac Pro RISC (mention Bien)</p>
      <p>Collège Étanclin - Brevet mention Bien</p>
      <p>École maternelle/primaire Françoise Dolto</p>
      <p>Téléchargez mon CV : 
        <a href="img/CV Vautier Valentin.pdf" title="Télécharger mon CV">
          <img src="img/imagecv.jpg" alt="Icône de téléchargement du CV" width="30" height="30">
        </a>
      </p>
      <img src="img/imagemoi.png" alt="Photo de Valentin Vautier" class="photo-profil" width="120"> <!-- Image personnelle -->
    </section>

    <!-- Section Contact -->
    <section id="contact">
      <h2>Contact</h2>
      <!-- Formulaire de contact -->
      <form action="https://formspree.io/f/xgvvajde" method="POST" id="contact-form">
        <fieldset>
          <legend>Formulaire de Contact</legend>

          <!-- Champs pour email et message -->
          <label for="email">Email :</label>
          <input type="email" id="email" name="email" required placeholder="Entrez votre email">

          <label for="message">Message :</label>
          <textarea id="message" name="message" required placeholder="Écrivez votre message"></textarea>

          <button type="submit">Envoyer</button> <!-- Bouton de soumission -->
        </fieldset>
      </form>
    </section>

    <!-- Liens vers les réseaux sociaux -->
    <div class="social-links">
      <a href="https://www.linkedin.com/in/valentin-vautier-5933982a3/" target="_blank">
        <img src="img/linkedin.png" alt="LinkedIn" width="40" height="40">
      </a>
      <a href="https://www.instagram.com/val_26293/" target="_blank">
        <img src="img/instagram.png" alt="Instagram" width="40" height="40">
      </a>
      <a href="https://github.com/Valentin-sts" target="_blank">
        <img src="img/github.png" alt="Github" width="40" height="40">
      </a>
    </div>
  </main>

  <!-- Pied de page -->
  <footer>
    <p>&#169; 2024 Vautier Valentin - Tous droits réservés</p>
  </footer>

  <!-- Script JavaScript pour changer la couleur de fond -->
  <script>
    document.getElementById("changeColorButton").onclick = function() {
      var colors = ["#FF5733", "#33FF57", "#3357FF", "#FF33A8", "#FFD700"];
      var randomColor = colors[Math.floor(Math.random() * colors.length)];
      document.body.style.backgroundColor = randomColor; // Changement aléatoire de la couleur de fond
    };

    document.getElementById("resetColorButton").onclick = function() {
      document.body.style.backgroundColor = ""; // Réinitialisation de la couleur de fond
    };
  </script>
</body>
</html>
