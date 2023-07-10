document.getElementById('suggestionForm').addEventListener('submit', function(event) {
    event.preventDefault(); 
  
    var duree = document.getElementById('duree').value;
    var objectif = document.getElementById('objectif').value;
  
    if (duree === '') {
      alert('Veuillez entrer une durée valide.');
      return;
    }
  
    var suggestions = getSuggestions(duree, objectif);
  
    var suggestionsContainer = document.getElementById('suggestions');
    suggestionsContainer.innerHTML = '';
  
    if (suggestions.length === 0) {
      suggestionsContainer.innerHTML = 'Aucune suggestion disponible pour la durée spécifiée.';
    } else {
      var ul = document.createElement('ul');
      for (var i = 0; i < suggestions.length; i++) {
        var li = document.createElement('li');
        li.textContent = suggestions[i];
        ul.appendChild(li);
      }
      suggestionsContainer.appendChild(ul);
      document.getElementById('exportBtn').disabled = false; 
    }
  });
  
  
  document.getElementById('clearBtn').addEventListener('click', function() {
    document.getElementById('suggestionForm').reset();
    document.getElementById('suggestions').innerHTML = '';
    document.getElementById('exportBtn').disabled = true;
  });
  
  function getSuggestions(duree, objectif) {
    var suggestions = [];
  
    if (objectif === 'perdre') {
      if (duree >= 7) {
        suggestions.push('Regime equilibre avec une alimentation riche en fruits et legumes');
        suggestions.push('Activites sportives variées, telles que la course à pied, le velo et la natation');
      } else {
        suggestions.push('Adoptez une alimentation saine et evitez les aliments transformes');
        suggestions.push('Faites au moins 30 minutes d\'exercice cardiovasculaire par jour');
      }
    } else if (objectif === 'maintenir') {
      suggestions.push('Maintenez une alimentation equilibree');
      suggestions.push('Faites de l\'exercice régulierement, comme la marche ou le yoga');
    } else if (objectif === 'prendre') {
      if (duree >= 7) {
        suggestions.push('Adoptez un regime riche en calories et en proteines');
        suggestions.push('Entraînez-vous avec des exercices de musculation');
      } else {
        suggestions.push('Augmentez votre apport calorique quotidien');
        suggestions.push('Faites de l\'exercice de musculation pour développer vos muscles');
      }
    }
  
    return suggestions;
  }
  