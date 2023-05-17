<?php

include __DIR__ . '/template/header.php';

include __DIR__ . '/Database/db.php';
?>


<main>
    <div class="container">
        <h1>Movies</h1>
        <div class="row">
            <?php foreach($movies as $movie) : ?>
                <div class="col-4">
                    <div class="card">
                        <div class="card-img">
                            <img src="<?= $movie->cover ?>" alt="<?= $movie->title ?>">
                        </div>
                        <div class="card-body">
                            <h3><?= $movie->title ?></h3>
                            <p><?= $movie->getDetails() ?></p>
                        </div>
                    </div>
                </div>

            <?php endforeach; ?>
        </div>
    </div>
</main>

<?php

include __DIR__ . '/template/footer.php';

?>