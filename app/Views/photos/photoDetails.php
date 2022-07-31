<?= $this->extend('layout/layout'); ?>

<?= $this->section('content'); ?>

<div class="details__container">
    <h1 class="content__section-header"><?= $picture['title'] ?></h1>
    <div class="details__banner-container">
        <div class="details__banner_image-container">
            <img src="<?= $picture['image'] ?>" alt="" class="details__banner-image">
        </div>
        <div class="details__content-container">
            <h1 class="details__title"><?= $picture['title'] ?></h1>
            <div class="details__content_price-uploader">
                <h3 class="details__price"><?= $picture['price'] ?></h3>
                <h3 class="details__uploader"><span>Uploaded by | </span><?= $picture['uploader'] ?></h3>
            </div>
            <p class="details__description"><?= $picture['description'] ?></p>
        </div>
    </div>
</div>
<div class="action__container">
    <a class="action__content-container action__delete" href="/home/delete/<?= $picture['id'] ?>"><i class="material-icons">delete</i></a>
    <a class="action__content-container action__edit" href="/home/edit/<?= $picture['id'] ?>"><i class="material-icons">edit</i></a>
    <div class="action__content-container action__content"><i class="material-icons">menu</i></div>
</div>
<script>
    const actionContainer = document.querySelector('.action__container');
    const editButton = document.querySelector('.action__edit');
    const deleteButton = document.querySelector('.action__delete');
    actionContainer.addEventListener('mouseenter', () => {
        editButton.style.display = 'flex';
        deleteButton.style.display = 'flex';
    })
    actionContainer.addEventListener('mouseleave', () => {
        editButton.style.display = 'none';
        deleteButton.style.display = 'none';
    })
</script>

<?= $this->endSection(); ?>