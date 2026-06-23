<?php
$sobre = fetch_single($pdo, 'sobre') ?? [];
?>

<section class="container section-padding" id="sobre">
    <div class="about-box">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <img src="<?= e(upload_path($sobre['imagem'] ?? null, 'assets/img/placeholder.svg')) ?>" class="about-img" alt="<?= e($sobre['alt_imagem'] ?? 'Projeto Galera Tech') ?>">
            </div>

            <div class="col-lg-6">
                <span class="tag"><?= e($sobre['tag'] ?? 'Sobre o projeto') ?></span>
                <h2 class="section-title"><?= e($sobre['titulo'] ?? 'Muito além de um curso de tecnologia') ?></h2>

                <p class="section-text mt-3"><?= e($sobre['texto_1'] ?? '') ?></p>
                <p class="section-text"><?= e($sobre['texto_2'] ?? '') ?></p>
            </div>
        </div>
    </div>
</section>
