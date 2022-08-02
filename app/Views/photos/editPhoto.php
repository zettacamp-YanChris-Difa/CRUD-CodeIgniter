<?= $this->extend('layout/layout'); ?>

<?= $this->section('content'); ?>

<div class="forms__container">
    <div class="forms__content-container">
        <h1 class="forms__header">Add Product</h1>
        <form action="<?= base_url('/home/update/'. $picture['id']) ?>" method="post" class="forms__input-container">
            <div class="form__input">
                <label for="title">Product Name</label>
                <input type="text" name="title" id="title" value="<?= $picture['title'] ?>" required>
            </div>
            <div class="form__input">
                <label for="image">Image URL</label>
                <input type="url" name="image" id="image" value="<?= $picture['image'] ?>" required></input>
            </div>
            <div class="form__input">
                <label for="description">Description</label>
                <textarea name="description" id="description" style="resize : none;" required><?= $picture['description'] ?></textarea>
            </div>
            <div class="form__input">
                <label for="price">Price</label>
                <input type="text" name="price" id="price" value="<?= $picture['price'] ?>" required>
            </div>
            <div class="form__input">
                <label for="uploader">Uploader</label>
                <input type="text" name="uploader" id="uploader" value="<?= $picture['uploader'] ?>" required>
            </div>
            <div class="form__buttons">
                <!-- <button type="button">Cancel</button> -->
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
</div>

<?= $this->endSection(); ?>