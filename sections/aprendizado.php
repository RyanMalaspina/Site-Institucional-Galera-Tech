<?php
$aprendizados = fetch_all_active($pdo, 'aprendizado');
?>

<section class="container section-padding" id="aprendizado">
    <div class="text-center mb-5">
        <span class="tag">Aprendizado</span>
        <h2 class="section-title">O que o aluno desenvolve</h2>
        <p class="section-text mx-auto" style="max-width: 740px;">
            A formação combina conhecimento técnico, competências humanas e visão de carreira.
        </p>
    </div>

    <div class="row g-4">
        <?php foreach ($aprendizados as $item): ?>
            <div class="col-md-6 col-lg-3">
                <div class="learn-card">
                    <i class="bi <?= e($item['icone']) ?>"></i>
                    <h5><?= e($item['titulo']) ?></h5>
                    <p><?= e($item['descricao']) ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>
