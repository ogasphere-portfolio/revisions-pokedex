<main>
        <div class="album">
            <div class="container">
                <div class="row">
                
                        <?php foreach ($pokemon as $key => $value) :
                        ?>
                            <figure class="figure col-lg-4">
                                <a href="<?= $altoRouter->generate('pokemon', ['id' => $value->getId()]) ?>">
                                    <div class="figure p-3">
                                        <img src="img/<?= $key + 1 ?>.png" class="figure-img img-fluid rounded" alt="...">
                                        <figcaption class="figure-caption text-white"><?= $value->getNom() ?></figcaption>
                                    </div>
                                </a>
                            </figure>
                        <?php endforeach; ?>
                </div>
            </div>
        </div>
</main>
