<?= $this->extend('layout/layout'); ?>

<?= $this->section('content'); ?>

<div class="home__container">
    <div class="home__content container">
        <div class="home__heading">
            <h1 class="home__heading-title">Lorem Gallery</h1>
            <p class="home__heading-desc">Find your favorite Photos, Vectors, Design and Mockup</p>
            <form action="" class="home__search">
                <input type="text" placeholder="Search Images or Design you like" class="home__search-input">
                <button class="button home__search-button">Search</button>
            </form>
        </div>
    </div>
</div>

<?php foreach ($picture as $pics) : ?>
    <div>
        <h1><?= $pics['title']; ?></h1>
        <img src="/images/<?= $pics['image']; ?>" alt="">
        <p><?= $pics['description']; ?></p>
    </div>
<?php endforeach; ?>

<?= $this->endSection(); ?>