<div class="section-tache">
  <h1>Gerer vos differentes taches</h1>
  <?php if (isset($message)) { ?>
    <span><?= $message ?></span>
  <?php  } ?>
  <form action="/" method="POST" class="form-add-tache">
    <h2>Ajouter une tache</h2>
    <div class="fields-group">

      <input type="text" required name="titre" placeholder="ajouter une tache">
      <button class="add-button" name="add-tache">Ajouter</button>
    </div>
  </form>
</div>


<div class="section-list-tache">
  <h1>Gerer vos differentes taches</h1>

  <form action="/" method="POST" class="form-add-tache">

    <h2>List des taches</h2>
    <?php foreach ($taches as $tache) {
    ?>

      <div class="checkbox-group">
        <label for="tache-<?= $tache->getId() ?>"><?= $tache->getTitre() ?></label>
        <input id="tache-<?= $tache->getId() ?>" value="<?= $tache->getId() ?>" type="checkbox" name="tache-<?= $tache->getId() ?>" placeholder="ajouter une tache">

      </div>
    <?php }    ?>
    <div class="fields-actions">
      <button class="deleted-one" name="deleted-one">Supprimer la selection</button>
      <button class="deleted-all" name="delete-all">Supprimer tout</button>
    </div>
  </form>
</div>
