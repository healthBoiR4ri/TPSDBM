<h1>Modification d'une couleur</h1>

<form action="<?= PATH ?>/couleurs/modif_sauve/<?= $couleur['ID_COULEUR'] ?>" method="POST">
  <div class="form-group">
    <label for="Id">Code Couleur :</label>
    <input type="text" class="form-control" placeholder="Saisir un Code" name="Id" id="Id" value=<?= $couleur['ID_COULEUR'] ?> readonly>
  </div>
  <div class="form-group">
    <label for="Nom">Nom Couleur:</label>
    <input type="text" class="form-control" placeholder="Saisir un Nom" name="Nom" id="Nom" value=<?= $couleur['NOM_COULEUR'] ?>>
  </div>
  <button type="submit" class="btn btn-primary">Enregistrer</button>
</form>
<a href="<?= PATH ?>/couleurs"><button class="btn btn-warning">Retour à la liste</button></a>