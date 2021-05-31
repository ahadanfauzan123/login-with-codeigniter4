<?php $uri = service('uri'); ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><?= $name; ?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php if (session()->get('email')) : ?>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item <?= ($uri->getSegment(1) == 'dashboard' ? 'active' : null) ?>">
                        <a class="nav-link" href="/dashboard">dashboard</a>
                    </li>
                    <li class="nav-item <?= ($uri->getSegment(1) == 'profile' ? 'active' : null) ?>">
                        <a class="nav-link" href="<?= base_url('/profile'); ?>">Profile</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            other
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <ul class="navbar-nav my-2 my-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('/'); ?>">Logout</a>
                        </li>
                    </ul>
                </ul>

            <?php endif; ?>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item <?= ($uri->getSegment(1) == '' ? 'active' : null); ?>">
                    <a class="nav-link" href="/">sign in</a>
                </li>
                <li class="nav-item <?= ($uri->getSegment(1) == 'register' ? 'active' : null); ?>">
                    <a class="nav-link" href="<?= base_url('/users/register'); ?>">register</a>
                </li>
            </ul>

        </div>
    </div>
</nav>