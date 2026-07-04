<header class="header">
    <div class="header-inner">

        <a href="<?= BASE_URL ?>/index.php" class="logo">
            <img src="<?= BASE_URL ?>/assets/images/resaam.png" alt="Logo RESAAM" class="logo-img">
            <span>Resaam</span>
        </a>

        <button class="burger" type="button" aria-label="Ouvrir le menu" aria-expanded="false" aria-controls="mainNav">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <nav class="nav" id="mainNav">
            <ul class="nav-list">
                <li class="nav-item">
                    <button class="nav-link" type="button" aria-expanded="false">
                        Solutions
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m6 9 6 6 6-6"></path></svg>
                    </button>

                    <div class="dropdown">
                        <div class="dropdown-inner">
                            <a href="<?= BASE_URL ?>/pages/uph.php" class="dropdown-item">
                                <span class="icon"><i class="ti ti-bell-ringing"></i></span>
                                <span>
                                    <strong>UPH</strong>
                                    <span class="p2">Urgence pré-hospitalière · destiné au SAMU &amp; aux ATSU</span>
                                </span>
                            </a>
                            <a href="<?= BASE_URL ?>/pages/transport-programme.php" class="dropdown-item">
                                <span class="icon"><i class="ti ti-truck-delivery"></i></span>
                                <span>
                                    <strong>Transport programmé</strong>
                                    <span class="p2">Gestion du transport sanitaire · destiné aux établissements de santé</span>
                                </span>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="<?= BASE_URL ?>/pages/outil-metier.php" class="dropdown-item">
                                <span class="icon"><i class="ti ti-clipboard-list"></i></span>
                                <span>
                                    <strong>Régulation</strong>
                                    <span class="p2">RH, flotte &amp; facturation · destiné aux ambulanciers — bientôt</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="nav-item"><a href="<?= BASE_URL ?>/pages/a-propos.php" class="nav-link">À propos</a></li>
                <li class="nav-item"><a href="<?= BASE_URL ?>/pages/faq.php" class="nav-link">FAQ</a></li>
                <li class="nav-item"><a href="<?= BASE_URL ?>/pages/contact.php" class="nav-link">Contact</a></li>
            </ul>

            <div class="header-actions">
                <a href="#" class="button button-white">Se connecter</a>
                <a href="#" class="button button-blue">Demander une démo</a>
            </div>
        </nav>

        <div class="nav-overlay"></div>

    </div>
</header>