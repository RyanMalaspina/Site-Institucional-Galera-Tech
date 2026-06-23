<?php
$posts = fetch_all_active($pdo, 'instagram_posts');
?>

<section class="instagram-section section-padding" id="instagram">
    <div class="container">
        <div class="row align-items-center mb-5">
            <div class="col-lg-7">
                <span class="tag">Instagram</span>
                <h2 class="section-title">Acompanhe os bastidores do Galera Tech</h2>
                <p class="section-text">
                    Veja registros das aulas, experiências, alunos, padrinhos e momentos que fazem parte dessa transformação.
                </p>
            </div>

            <div class="col-lg-5 text-lg-end">
                <a href="<?= e($config['instagram_link'] ?? '#') ?>" target="_blank" class="btn btn-gt">
                    <i class="bi bi-instagram"></i> Seguir no Instagram
                </a>
            </div>
        </div>

        <div class="row g-4">
            <?php foreach (array_slice($posts, 0, 3) as $post): ?>
                <div class="col-md-6 col-lg-4">
                    <a href="<?= e($post['link']) ?>" target="_blank" class="insta-feature-card">
                        <img src="<?= e(upload_path($post['imagem'], 'assets/img/placeholder.svg')) ?>" alt="<?= e($post['titulo']) ?>">
                        <div class="insta-content">
                            <span><?= e($post['categoria']) ?></span>
                            <h5><?= e($post['titulo']) ?></h5>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
