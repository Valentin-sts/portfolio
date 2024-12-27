function validerFormulaire() {
    
    var captchaResponse = document.forms["mon-formulaire1"]["captcha"].value.trim();
    
    if (captchaResponse !== "8") {
      
      alert("Désolé, la réponse au calcul est incorrecte. Veuillez réessayer.");
      return false; 
    }
    
    return true;
  }
  