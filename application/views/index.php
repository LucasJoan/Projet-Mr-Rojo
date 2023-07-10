<!DOCTYPE html>
<html>
<head>
  <title>Complétion du Profil Utilisateur</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  <div class="container">
    <h1>Complétion du Profil Utilisateur</h1>
    <form id="profileForm">
      <label for="genre">Genre :</label>
      <select id="genre" name="genre">
        <option value="homme">Homme</option>
        <option value="femme">Femme</option>
      </select>

      <label for="taille">Taille (en cm) :</label>
      <input type="number" id="taille" name="taille">

      <label for="poids">Poids (en kg) :</label>
      <input type="number" id="poids" name="poids">

      <label for="objectif">Objectif :</label>
      <select id="objectif" name="objectif">
        <option value="perdre">Perdre du poids</option>
        <option value="maintenir">Maintenir son poids</option>
        <option value="prendre">Prendre du poids</option>
      </select>

      <button type="submit">Enregistrer</button>
    </form>
  </div>

  <script src="script.js"></script>
</body>
</html>
