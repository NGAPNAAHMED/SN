function AfficheSousBranche(SousBranche) {
    divCible = document.querySelector(".Vues");
    if (divCible.className === 'Vues') {
        divCible.className = 'Vues';
        divCible.classList.add(SousBranche);
    } else {
        divCible.className = 'Vues';
    }
}


window.addEventListener('scroll', function() {
    var header = document.querySelector('header');
    var headerHeight = header.offsetHeight;
    
    if (window.pageYOffset > headerHeight) {
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled');
    }
  });

function AfficheSousMenu(element) {
    var sousMenu = element.nextElementSibling;
    sousMenu.style.display = 'flex';
}

function CacheSousMenu(element) {
    var sousMenu = element.nextElementSibling;
    sousMenu.style.display = 'none';
}

function AfficherMenu() {
    divCible = document.querySelector("body");
    var divPages = document.querySelector(".Pages");

    if (divCible.classList.contains("Menu")) {
        divCible.classList.remove("Menu");
    } else {
        divCible.classList.add("Menu");
    }

    divPages.addEventListener('click', function(event) {
        event.stopPropagation();
    });
}





function AfficherdeConnexion(){

  //window.location.href = "index.html";
  if (confirm("Êtes-vous sûr de vouloir vous déconnecter ?")) {
    window.location.href = "index.html";
  }


}


function AfficherConnexion(){

  window.location.href = "connexion.php";

}

let currentContent = 0; // Index de l'affiche actuelle

function changeInputContainer(element) {
    const liElements = document.querySelectorAll('.choice_link li');

    liElements.forEach(li => {
        if (li === element) {
            li.classList.add('Actuel');
        } else {
            li.classList.remove('Actuel');
        }
    });

    const dataContentTrigger = element.getAttribute('data-contentTrigger');

    const inputContainer = document.querySelector(`.Affiche[data-content="${dataContentTrigger}"]`);

    const allInputContainers = document.querySelectorAll('.Affiche');
    allInputContainers.forEach(container => {
        container.classList.remove('show');
    });

    inputContainer.classList.add('show');
    currentContent = parseInt(dataContentTrigger);
}

function changeContentAutomatically() {
    const affiches = document.querySelectorAll('.Affiche');
    const afficheCount = affiches.length;

    const currentAffiche = document.querySelector(`.Affiche[data-content="${currentContent}"]`);
    const nextAfficheIndex = (currentContent + 1) % afficheCount;
    const nextAffiche = document.querySelector(`.Affiche[data-content="${nextAfficheIndex}"]`);

    currentAffiche.classList.remove('show');
    nextAffiche.classList.add('show');

    const liElements = document.querySelectorAll('.choice_link li');
    liElements.forEach(li => {
        if (li.getAttribute('data-contentTrigger') === `${currentContent}`) {
            li.classList.remove('Actuel');
        } else if (li.getAttribute('data-contentTrigger') === `${nextAfficheIndex}`) {
            li.classList.add('Actuel');
        }
    });

    currentContent = nextAfficheIndex;
}

setInterval(changeContentAutomatically, 5000); // Change l'affiche toutes les 3 secondes








function VerificationNom(idCible) {
    var input = document.getElementById(idCible);
    var icon = input.parentNode.querySelector('i');
  
    if (input.value.length >= 3) {
      icon.className = "fas fa-check";
      icon.style.color = "green";
    } else {
      icon.className = "fas fa-times";
      icon.style.color = "red";
    }
  }
  
  function VerificationPrenom(idCible) {
    var input = document.getElementById(idCible);
    var icon = input.parentNode.querySelector('i');
  
    if (input.value.length >= 5) {
      icon.className = "fas fa-check";
      icon.style.color = "green";
    } else {
      icon.className = "fas fa-times";
      icon.style.color = "red";
    }
  }
  
  function VerificationNumero(idCible) {
    var input = document.getElementById(idCible);
    var icon = input.parentNode.querySelector('i');
  
    if (/^\d{9}$/.test(input.value)) {
      icon.className = "fas fa-check";
      icon.style.color = "green";
    } else {
      icon.className = "fas fa-times";
      icon.style.color = "red";
    }
  }
  
  function VerificationMail(idCible) {
    var input = document.getElementById(idCible);
    var icon = input.parentNode.querySelector('i');
  
    if (/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(input.value)) {
      icon.className = "fas fa-check";
      icon.style.color = "green";
    } else {
      icon.className = "fas fa-times";
      icon.style.color = "red";
    }
  }
  
  function VerificationDate(idCible) {
    var input = document.getElementById(idCible);
    var icon = input.parentNode.querySelector('i');
  
    if (/^\d{2}\/\d{2}\/\d{4}$/.test(input.value)) {
      icon.className = "fas fa-check";
      icon.style.color = "green";
    } else {
      icon.className = "fas fa-times";
      icon.style.color = "red";
    }
  }
  
  function VerificationLieu(idCible) {
    var input = document.getElementById(idCible);
    var icon = input.parentNode.querySelector('i');
  
    if (input.value.length >= 5) {
      icon.className = "fas fa-check";
      icon.style.color = "green";
    } else {
      icon.className = "fas fa-times";
      icon.style.color = "red";
    }
  }
  
  function VerificationUsername(idCible) {
    var input = document.getElementById(idCible);
    var icon = input.parentNode.querySelector('i');
  
    if (input.value.length >= 5) {
      icon.className = "fas fa-check";
      icon.style.color = "green";
    } else {
      icon.className = "fas fa-times";
      icon.style.color = "red";
    }
  }
  
  function VerificationPassword(idCible) {
    var input = document.getElementById(idCible);
    var icon = input.parentNode.querySelector('i');
  
    var hasUpperCase = /[A-Z]/.test(input.value);
    var hasLowerCase = /[a-z]/.test(input.value);
    var hasNumber = /\d/.test(input.value);
    var hasSymbol = /[!@#$%^&*()]/.test(input.value);
    var isLengthValid = input.value.length >= 8;
  
    if (hasUpperCase && hasLowerCase && hasNumber && hasSymbol && isLengthValid) {
      icon.className = "fas fa-check";
      icon.style.color = "green";
    } else {
      icon.className = "fas fa-times";
      icon.style.color = "red";
    }
  }
  
  function VerificationPassword2(idCible) {
    var input = document.getElementById(idCible);
    var icon = input.parentNode.querySelector('i');
    var mdp1Input = document.getElementById("saveMDP1");
  
    if (input.value === mdp1Input.value) {
      icon.className = "fas fa-check";
      icon.style.color = "green";
    } else {
      icon.className = "fas fa-times";
      icon.style.color = "red";
    }
  }