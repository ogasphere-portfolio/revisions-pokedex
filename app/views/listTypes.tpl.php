<main>
    <div class="album">
        <div class="container">
            <div class="row">
                <h1>liste des types de Pokémon</h1>
                <p>Cliquez sur un type pour voir tous les Pokémon de ce type</p>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <?php foreach ($type as $key => $value) :
                    ?>
                        <div class="col">
                            <a href="<?= $altoRouter->generate('pokemonlistbytype', ['id' => $value->getId()]) ?>">
                                <div class="card shadow-sm" style="background-color: #<?= $value->getColor() ?>">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <small>
                                                <h2 style="color: white"><?= $value->getName() ?></h2>
                                            </small>
                                        </div>

                                    </div>
                                </div>
                            </a>

                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</main>


