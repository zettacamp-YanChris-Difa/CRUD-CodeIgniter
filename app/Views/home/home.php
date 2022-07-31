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

    <a href="/photos/post" class="button__add"><i class='bx bx-plus button__add-icon'></i></a>
</div>

<?= $this->endSection(); ?>