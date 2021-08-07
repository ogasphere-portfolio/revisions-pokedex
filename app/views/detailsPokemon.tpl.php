<main>
  <div class="album">
    <div class="container">

      <h1>Detail</h1>
      <div class="card mb-3 border-0">
        <div class="row bgFond">
          <div class="col-md-4">
            <img src="../img/<?= $pokemon[0]->getNumero() ?>.png" class="img-fluid rounded-start" alt="...">
          </div>

          <div class="col-md-8 rounded right-section">
            <div class="card-body ">
              <h3 class="card-title my-3">
                <?= $pokemon[0]->getNumero() ?> <?= $pokemon[0]->getNom() ?>
              </h3>
              <h2>
                <?php foreach ($pokemon as $key => $value) : ?>
                  <span class="badge " style="background-color: #<?= $pokemon[$key]->getColor() ?>"><?= $pokemon[$key]->getName() ?></span>
                 
                <?php endforeach; ?>
              </h2>
              <table class="table table-borderless">
                <thead>
                  <tr>
                    <th scope="col" colspan="3">
                      <h3>Statistiques</h3>
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">Pv</th>
                    <td class="stats"><?= $pokemon[0]->getPv() ?></td>
                    <td class="td-progress">
                      <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: <?= $pokemon[0]->getPv() ?>% " aria-valuenow="<?= $pokemon[0]->getPv() ?>" aria-valuemin="0" aria-valuemax="130"></div>
                      </div>
                    </td>

                  </tr>
                  <tr>
                    <th scope="row">Attaque</th>
                    <td class="stats"><?= $pokemon[0]->getAttaque() ?></td>
                    <td>
                      <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: <?= $pokemon[0]->getAttaque() ?>% " aria-valuenow="<?= $pokemon[0]->getAttaque() ?>" aria-valuemin="0" aria-valuemax="130"></div>
                      </div>
                    </td>

                  </tr>
                  <tr>
                    <th scope="row">Défense</th>
                    <td class="stats"><?= $pokemon[0]->getDefense() ?></td>
                    <td>
                      <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: <?= $pokemon[0]->getDefense() ?>% " aria-valuenow="<?= $pokemon[0]->getDefense() ?>" aria-valuemin="0" aria-valuemax="130"></div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">Attaque Spé.</th>
                    <td class="stats"><?= $pokemon[0]->getAttaque_spe() ?></td>
                    <td>
                      <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: <?= $pokemon[0]->getAttaque_spe() ?>% " aria-valuenow="<?= $pokemon[0]->getAttaque_spe() ?>" aria-valuemin="0" aria-valuemax="130"></div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">Défense Spé.</th>
                    <td class="stats"><?= $pokemon[0]->getDefense_spe() ?></td>
                    <td>
                      <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: <?= $pokemon[0]->getDefense_spe() ?>% " aria-valuenow="<?= $pokemon[0]->getDefense_spe() ?>" aria-valuemin="0" aria-valuemax="130"></div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">Vitesse</th>
                    <td class="stats"><?= $pokemon[0]->getVitesse() ?></td>
                    <td>
                      <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: <?= $pokemon[0]->getVitesse() ?>% " aria-valuenow="<?= $pokemon[0]->getVitesse() ?>" aria-valuemin="0" aria-valuemax="130"></div>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>

          </div>
        </div>
      </div>
    </div>
</main>