<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>Mon portfolio - Valentin Vautier</title>
</head>
<body>
  <header>
    <h1>Valentin Vautier</h1>
    <p>Etudiant en BTS à Caensup Sainte Ursule</p>
  </header>
  <nav>
    <ul>
      <li><a href="#accueil">Accueil</a></li>
      <li><a href="#a-propos">A propos</a></li>
      <li><a href="#competences">Compétences</a></li>
      <li><a href="#experience">Expérience</a></li>
      <li><a href="#formation">Formation</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>
  </nav>
  <main>
    <section id="accueil">
      <h2>Accueil</h2>
      <p>Bienvenue sur mon portfolio en ligne. Je suis Valentin Vautier, étudiant en alternance en BTS SIO. Sur cette page, vous trouverez un aperçu de mon parcours professionnel et de mes compétences.</p>
    </section>
    <section id="a-propos">
      <h2>A propos</h2>
      <p>Je suis étudiant en alternance en BTS SIO de l'établissement Caensup St Ursule en spécialité réseaux, j'ai 18ans né le 26/06/2006 à Coutances, je suis passioné de football.</p>
    </section>
    <section id="competences">
      <h2>Compétences</h2>
<!-- Barre de compétence en HTML -->
<div class="skill-bar">
  <div class="skill-bar-fill" style="width: 60%;"></div>
</div>
<p>HTML</p>

<!-- Barre de compétence en CSS -->
<div class="skill-bar">
  <div class="skill-bar-fill" style="width: 50%;"></div>
</div>
<p>CSS</p>

<!-- Barre de compétence en PHP -->
<div class="skill-bar">
  <div class="skill-bar-fill" style="width: 50%;"></div>
</div>
<p>PHP</p>

<!-- Barre de compétence en YAML -->
<div class="skill-bar">
  <div class="skill-bar-fill" style="width: 55%;"></div>
</div>
<p>YAML</p>

</div>

    </section>
    <section id="experiences">
      <h2>Expériences</h2>
      <p>Alternance à Daltoner, Saint-Lo </p>
      <p>8 semaines de stage à SPID'INFORMATIQUE </p>
      <p>8 semaines de stage à TEKNIC'INFO</p>
    
    </section>
    <section id="formations">
      <h2>Formations</h2>
      <p>Etude sup niveau BTS à Caensup Sainte Ursule</p>
      <p>Lycée Charles tellier avec le Bac pro RISC avec mention bien</p>
      <p>Collège Etenclin Brevet mention Bien</p>
      <p>Ecole maternelle/primaire Francoise Dolto</p>
      <p>On peut voir sur mon CV toute mes expériences professionnels en cliquant dessus

      <a href="CV Vautier Valentin.pdf" title="Télécharger mon CV au format PDF">
  <img src="imagecv.jpg" alt="Logo CV"width=30px height=30px> 
</a>

</style>
 Barre de compétence en CSS /<img src="imagemoi.png" alt="Ma photo" class="photo-profil" width=120.5px> 

<section>
			<a name="contact"></a>
			<h1>Contact</h1>
			<form name="mon-formulaire1" action="page-envoi.html" method="get">
<p>
   <input type="radio" name="civi" value="Mme" /> Madame
   <input type="radio" name="civi" value="Mr" /> Monsieur
</p>
<p>
   Votre prénom :<br />
   <input type="text" name="prenom" value="" />
</p>
<p>
   Votre nom :<br />
   <input type="text" name="nom" value="" />
</p>
<p>
   Votre addresse e-mail :<br />
   <input type="password" name="addresse e-mail" value="" />
</p>
   
<p>
   Objet du message :<br />
   <textarea name="le-message" rows="6" cols="40">Vous pouvez saisir ici l'objet du message.</textarea>
</p>
<p>
	Votre message :<br />
   <textarea name="le-message" rows="6" cols="40">Vous pouvez saisir ici un message.</textarea>
</p>
<p>
   <input type="submit" value="Envoyer" />
   <input type="reset" value="Annuler" />
</p>
</form>
		</section>