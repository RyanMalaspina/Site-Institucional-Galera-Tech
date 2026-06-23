<footer>
    <div class="container">
        <div class="row g-4">
            <div class="col-md-4">
                <img src="<?= e(upload_path($config['logo'] ?? null, 'assets/img/logo-galera-tech.svg')) ?>" class="footer-logo mb-3" alt="Galera Tech">
                <p><?= e($config['texto_rodape'] ?? 'Formação gratuita em tecnologia para jovens, conectando educação, empresas e oportunidades.') ?></p>
            </div>

            <div class="col-md-4">
                <h5 class="fw-bold">Contato</h5>
                <p class="mb-1"><i class="bi bi-instagram"></i> <?= e($config['instagram'] ?? '@galeratech') ?></p>
                <p class="mb-1"><i class="bi bi-whatsapp"></i> <?= e($config['whatsapp_formatado'] ?? '(17) 99999-9999') ?></p>
                <p class="mb-1"><i class="bi bi-geo-alt"></i> <?= e($config['endereco'] ?? 'São José do Rio Preto - SP') ?></p>
            </div>

            <div class="col-md-4">
                <h5 class="fw-bold">Links úteis</h5>
                <p class="mb-1"><a href="<?= e($config['link_apeti'] ?? '#') ?>" class="text-decoration-none text-dark">Apeti</a></p>
                <p class="mb-1"><a href="<?= e($config['link_inscricao'] ?? '#') ?>" class="text-decoration-none text-dark">Inscrições</a></p>
                <p class="mb-1"><a href="<?= e($config['link_padrinho'] ?? '#') ?>" class="text-decoration-none text-dark">Seja padrinho</a></p>
            </div>
        </div>

        <hr class="my-4">

        <div class="text-center">
            <small>© <?= date('Y') ?> Galera Tech | Powered by Apeti. Todos os direitos reservados.</small>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= asset('js/main.js') ?>"></script>
</body>
</html>
