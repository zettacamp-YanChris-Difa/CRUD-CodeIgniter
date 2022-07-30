<?= $this->extend('layout/layout'); ?>

<?= $this->section('content'); ?>

<div class="photos__container content__section-container">
    <h1 class="content__section-header">Photos</h1>
    <div class="photos__content-container">
        <?php foreach ($picture as $pics) : ?>
            <a href="/<?= $pics['slug']; ?>" target="_blank">
                <div class="photos__image-container">
                    <img class="photos__image" src="<?= $pics['image']; ?>" alt="">
                    <div class="photos__image_details-container">
                        <div class="photos__image-name">
                            <h3><?= $pics['title'] ?></h3>
                        </div>
                        <div class="photos__image-description">
                            <p><?= $pics['description'] ?></p>
                        </div>
                        <div class="photos__image-price">
                            <h3><?= $pics['price'] ?></h3>
                        </div>
                    </div>
                </div>
            </a>
        <?php endforeach; ?>
    </div>
</div>

<?= $this->endSection(); ?>