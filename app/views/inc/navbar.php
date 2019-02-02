<nav class="navbar navbar-expand-lg mb-3 navbar-dark bg-primary">
    <a class="navbar-brand" href="<?= URLROOT; ?>">
        <img src="https://img.icons8.com/office/56/000000/php-logo.png">
        <?= SITENAME; ?>
    </a>
    <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
    >
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="<?= URLROOT; ?>">
                    <img src="https://img.icons8.com/dusk/16/000000/home-page.png">
                    Home
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= URLROOT; ?>/pages/about">
                    <img src="https://img.icons8.com/dusk/16/000000/about.png">
                    About
                </a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="<?= URLROOT; ?>/users/register">
                    <img src="https://img.icons8.com/dusk/16/000000/edit-user-male.png">
                    Register
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= URLROOT; ?>/users/login">
                    <img src="https://img.icons8.com/dusk/16/000000/password.png">
                    Login
                </a>
            </li>
        </ul>
    </div>
</nav>