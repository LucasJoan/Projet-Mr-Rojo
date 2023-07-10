<!DOCTYPE html>
<html>
<head>
  <title>Suggestion de Régimes et d'Activité Sportive</title>
  <link rel="stylesheet" type="text/css" href="stylesug.css">
</head>
<body>
  <div class="container">
    <h1>Suggestion de Regimes et <br> d'Activite Sportive</h1>
    <form id="suggestionForm">
      <label for="duree">Duree (en jours) :</label>
      <input type="number" id="duree" name="duree">

      <label for="objectif">Objectif :</label>
      <select id="objectif" name="objectif">
        <option value="perdre">Perdre du poids</option>
        <option value="maintenir">Maintenir son poids</option>
        <option value="prendre">Prendre du poids</option>
      </select>

      <button type="submit">Obtenir les Suggestions</button>
      <button id="exportBtn" disabled>Exporter en PDF</button>
      <button id="clearBtn" type="button">Effacer</button>
    </form>

    <div id="suggestions"></div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.min.js"></script>
  <script src="suggestion.js"></script>
</body>
</html>
