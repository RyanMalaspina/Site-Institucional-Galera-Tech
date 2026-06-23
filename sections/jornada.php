<?php
$jornada = fetch_all_active($pdo, 'jornada');
?>

<section class="journey section-padding" id="jornada">
    <div class="container">
        <div class="text-center mb-5">
            <span class="tag">Jornada do participante</span>
            <h2 class="section-title">Como a experiência acontece</h2>
            <p class="section-text mx-auto" style="max-width: 720px;">
                Uma trilha organizada para que o jovem entre, aprenda, pratique, se conecte com pessoas e enxergue novas possibilidades.
            </p>
        </div>

        <div class="row g-4">
            <?php foreach ($jornada as $item): ?>
                <div class="col-md-3">
                    <div class="step-card">
                        <div class="step-number"><?= e($item['numero']) ?></div>
                        <h5 class="fw-bold"><?= e($item['titulo']) ?></h5>
                        <p><?= e($item['descricao']) ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
