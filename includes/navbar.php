<nav class="navbar navbar-expand-lg sticky-top">
    <div class="container">
        <a class="navbar-brand" href="#inicio">
            <img src="<?= e(upload_path($config['logo'] ?? null, 'assets/img/logo-galera-tech.svg')) ?>" alt="Galera Tech">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu"
            aria-controls="menu" aria-expanded="false" aria-label="Abrir menu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav ms-auto align-items-lg-center">
                <li class="nav-item"><a class="nav-link" href="#sobre">Sobre</a></li>
                <li class="nav-item"><a class="nav-link" href="#jornada">Jornada</a></li>
                <li class="nav-item"><a class="nav-link" href="#aprendizado">Aprendizado</a></li>
                <li class="nav-item"><a class="nav-link" href="#experiencias">Experiências</a></li>
                <li class="nav-item"><a class="nav-link" href="#depoimentos">Depoimentos</a></li>
                <li class="nav-item"><a class="nav-link" href="#instagram">Instagram</a></li>
                <li class="nav-item"><a class="nav-link" href="#padrinhos">Parceiros</a></li>
                <li class="nav-item ms-lg-3">
                    <a class="btn btn-gt" href="#contato"><?= e($config['texto_botao_menu'] ?? 'Participar') ?></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
