<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mon portfolio - Valentin Vautier</title>
  <link rel="icon" type="image/png" href="img/logoweb.png">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <header>
    <h1>Valentin Vautier</h1>
    <p>Étudiant en BTS à Caensup Sainte Ursule</p>
  </header>

  <nav>
    <ul>
      <li><a href="#accueil">Accueil</a></li>
      <li><a href="#a-propos">À propos</a></li>
      <li><a href="#competences">Compétences</a></li>
      <li><a href="#realisation">Réalisation</a></li>
      <li><a href="#experiences">Expérience</a></li>
      <li><a href="#formations">Formation</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>
  </nav>

  <main>
    <section id="accueil">
      <h2>Accueil</h2>
      <p>Bienvenue sur mon portfolio en ligne. Je suis Valentin Vautier, étudiant en alternance en BTS SIO. Sur cette page, vous trouverez un aperçu de mon parcours professionnel et de mes compétences.</p>
    </section>

    <section id="a-propos">
      <h2>À propos</h2>
      <p>Je suis étudiant en alternance en BTS SIO à Caensup Sainte Ursule, spécialité réseaux. J'ai 18 ans, né le 26 juin 2006 à Coutances. Je suis passionné de football.</p>
    </section>

    <section id="competences">
      <h2>Compétences</h2>

      <div class="competence">
        <p>HTML</p>
        <div class="competence-container">
          <div class="skill-bar">
            <div class="skill-bar-fill" style="width: 70%;">70%</div>
          </div>
        </div>
      </div>

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

      <div class="certification">
  <h3>Certification</h3>
  <p><strong>Certification obtenue :</strong> SecNumAcademie - Formation en cybersécurité (Certification validée)</p>
  <a href="img/certifsecnum.pdf" target="_blank">Télécharger mon certificat SecNumAcademie (PDF)</a>
  <p><a href="https://www.secnumacademie.gouv.fr/" target="_blank">En savoir plus sur SecNumAcademie</a></p>
</div>
    </section>

    <section id="realisation">
      <h2>Réalisation</h2>
      <p>Réalisation de mon portfolio personnel, conçu en HTML, CSS et PHP. Cette plateforme présente mes compétences et mes expériences professionnelles, permettant ainsi aux recruteurs de mieux me connaître.</p>
      <img src="img/portfolio.png" alt="Capture d'écran du portfolio de Valentin Vautier" class="photo-profil" width="400">
      <h3>Exercice Interactif</h3>
      <p>Un exercice simple réalisé en HTML, CSS et JavaScript : un bouton pour changer la couleur de fond de la page et un autre pour revenir au fond de base.</p>

      <button id="changeColorButton">Changer la couleur de fond</button>
      <button id="resetColorButton">Revenir au fond de base</button>
    </section>

    <section id="experiences">
      <h2>Expériences</h2>
      <p>Alternance à Daltoner pour 2 ans, Saint-Lô</p>
      <p>8 semaines de stage à SPID'Informatique, La Haye</p>
      <p>8 semaines de stage à Teknic'Info, Valognes</p>
    </section>

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
      <img src="img/imagemoi.png" alt="Photo de Valentin Vautier" class="photo-profil" width="120">
    </section>

    <section id="contact">
      <h2>Contact</h2>
      <form name="mon-formulaire1" action="html/page-envoi.html" method="get" onsubmit="return validerFormulaire()">
        <p>
          <input type="radio" id="mme" name="civi" value="Mme" aria-label="Civilité Madame">
          <label for="mme">Madame</label>
          <input type="radio" id="mr" name="civi" value="Mr" aria-label="Civilité Monsieur">
          <label for="mr">Monsieur</label>
        </p>
        <p>
          <label for="prenom">Votre prénom :</label>
          <input type="text" id="prenom" name="prenom" required>
        </p>
        <p>
          <label for="nom">Votre nom :</label>
          <input type="text" id="nom" name="nom" required>
        </p>
        <p>
          <label for="email">Votre adresse e-mail :</label>
          <input type="email" id="email" name="email" required>
        </p>
        <p>
          <label for="objet-message">Objet du message :</label>
          <textarea id="objet-message" name="objet-message" rows="3" cols="40" placeholder="Saisissez l'objet du message" required></textarea>
        </p>
        <p>
          <label for="contenu-message">Votre message :</label>
          <textarea id="contenu-message" name="contenu-message" rows="6" cols="40" placeholder="Saisissez votre message" required></textarea>
        </p>
        <p>
          <label for="captcha">Combien font 2+6 ?</label>
          <input type="text" name="captcha" id="captcha" placeholder="Réponse au CAPTCHA" required>
          <img src="img/captcha.png" alt="CAPTCHA" width="65" height="50">
        </p>
        <p>
          <input type="submit" value="Envoyer">
          <input type="reset" value="Annuler">
        </p>
      </form>

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
    </section>
  </main>

  <footer>
    <p>&#169; 2024 Vautier Valentin - Tous droits réservés</p>
  </footer>

  <script>
    document.getElementById("changeColorButton").onclick = function() {
      var colors = ["#FF5733", "#33FF57", "#3357FF", "#FF33A8", "#FFD700"];
      var randomColor = colors[Math.floor(Math.random() * colors.length)];
      document.body.style.backgroundColor = randomColor;
    };

    document.getElementById("resetColorButton").onclick = function() {
      document.body.style.backgroundColor = ""; 
    };
  </script>
</body>
</html>
