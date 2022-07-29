<header class="header" id="header">
    <nav class="navbar container">
        <h1 class="navbar__logo">
            Lorem Gallery
            <i class='bx bx-images'></i>
        </h1>

        <div class="navbar__menu">
            <ul class="navbar__list">
                <li class="navbar__item">
                    <a href="<?= base_url('/picture/vectors'); ?>" class="navbar__link">
                        Vectors
                    </a>
                </li>
                <li class="navbar__item">
                    <a href="<?= base_url('/picture/photos'); ?>" class="navbar__link">
                        Photos
                    </a>
                </li>
                <li class="navbar__item">
                    <a href="<?= base_url('/picture/mockup'); ?>" class="navbar__link">
                        Mockup
                    </a>
                </li>
                <li class="navbar__item">
                    <a href="<?= base_url('/'); ?>" class="navbar__link">
                        More
                    </a>
                </li>
            </ul>
        </div>

        <div class="navbar__buttons">
            <a href="<?= base_url('/user/login'); ?>" class="navbar__button">
                <i class='bx bxs-user'></i>
                Sign In
            </a>
            <a href="<?= base_url('/user/cart'); ?>" class="navbar__button">
                <i class='bx bxs-cart'></i>
                Cart
            </a>
            <a href="<?= base_url('/user/collection'); ?>" class="navbar__button">
                <i class='bx bx-folder-open'></i>
                Collection
            </a>
        </div>

    </nav>
</header>