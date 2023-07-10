document.getElementById('profileForm').addEventListener('submit', function(event) {
    event.preventDefault(); 
  
    
    var genre = document.getElementById('genre').value;
    var taille = document.getElementById('taille').value;
    var poids = document.getElementById('poids').value;
    var objectif = document.getElementById('objectif').value;
  
    
    if (genre === '' || taille === '' || poids === '' || objectif === '') {
      alert('Veuillez remplir tous les champs du formulaire.');
      return;
    }
  
   
    var message = 'Profil enregistré avec succès!\n\n';
    message += 'Genre: ' + genre + '\n';
    message += 'Taille: ' + taille + ' cm\n';
    message += 'Poids: ' + poids + ' kg\n';
    message += 'Objectif: ' + objectif + '\n';
    alert(message);
  });
  