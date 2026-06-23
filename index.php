<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galera Tech - Powered by Apeti</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- link do CSS externo -->
    <link href="style.css" type="text/css" rel="stylesheet">
    <style>
        .cor {
            text-decoration: none;
            color: #000000;
        }
    </style>
</head>

<body>
    <!-- MENU -->
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#inicio">
                <img src="img/logo-galera-tech.png" alt="Galera Tech">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu"
                aria-controls="menu" aria-expanded="false" aria-label="Abrir menu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav ms-auto align-items-lg-center">
                    <li class="nav-item"><a class="nav-link" href="#">Início</a></li>
                    <li class="nav-item"><a class="nav-link" href="#sobre">Sobre</a></li>
                    <li class="nav-item"><a class="nav-link" href="#jornada">Jornada</a></li>
                    <li class="nav-item"><a class="nav-link" href="#aprendizado">Aprendizado</a></li>
                    <li class="nav-item"><a class="nav-link" href="#experiencias">Experiências</a></li>
                    <li class="nav-item"><a class="nav-link" href="#depoimentos">Depoimentos</a></li>
                    <li class="nav-item"><a class="nav-link" href="#instagram">Instagram</a></li>
                    <li class="nav-item"><a class="nav-link" href="#padrinhos">Padrinhos</a></li>
                    <li class="nav-item"><a class="nav-link" href="#perguntas">Dúvidas</a></li>
                    <li class="nav-item ms-lg-3">
                        <a class="btn btn-gt" href="#contato">Participar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- HERO SLIDER -->
    <section class="hero-carousel" id="inicio">
        <div id="carouselHeroGaleraTech"
            class="carousel slide carousel-fade"
            data-bs-ride="carousel"
            data-bs-interval="15000"
            data-bs-pause="false">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselHeroGaleraTech" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselHeroGaleraTech" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselHeroGaleraTech" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>

            <div class="carousel-inner">

                <!-- SLIDE 1 -->
                <div class="carousel-item active">
                    <div class="hero-slide" style="background-image: url('img/wesley.jpeg');">
                        <div class="container">
                            <div class="hero-content">
                                <span class="hero-badge">Capacitação gratuita em tecnologia</span>
                                <h1>Jovens prontos para construir o <span>amanhã da tecnologia</span></h1>
                                <p>
                                    O Galera Tech aproxima estudantes, empresas, mentores e oportunidades concretas
                                    para converter aprendizado em carreira, independência e desenvolvimento profissional.
                                </p>

                                <div class="d-flex flex-wrap gap-3 mt-4">
                                    <a href="#contato" class="btn btn-gt">Quero participar</a>
                                    <a href="#contato" class="btn btn-light rounded-pill px-4 py-3 fw-bold">
                                        Quero apoiar
                                    </a>
                                </div>

                                <!-- <div class="hero-info-card">
                                    <strong>Powered by Apeti</strong>
                                    <p class="mb-0 small">
                                        Uma iniciativa conectada ao ecossistema de tecnologia e inovação de Rio Preto.
                                    </p>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SLIDE 2 -->
                <div class="carousel-item">
                    <div class="hero-slide" style="background-image: url('img/marta.jpeg');">
                        <div class="container">
                            <div class="hero-content">
                                <span class="hero-badge">Aprender, praticar e se conectar</span>
                                <h1>Vivências que conectam jovens ao <span>mercado</span></h1>
                                <p>
                                    Atividades práticas, desafios, mentorias e interação com especialistas ajudam os
                                    participantes a descobrir oportunidades dentro do universo da tecnologia.
                                </p>

                                <div class="d-flex flex-wrap gap-3 mt-4">
                                    <a href="#experiencias" class="btn btn-gt">Ver experiências</a>
                                    <a href="#sobre" class="btn btn-light rounded-pill px-4 py-3 fw-bold">
                                        Conheça o projeto
                                    </a>
                                </div>

                                <!-- <div class="hero-info-card">
                                    <strong>Formação com propósito</strong>
                                    <p class="mb-0 small">
                                        Tecnologia, carreira, empreendedorismo e desenvolvimento humano em uma jornada
                                        prática.
                                    </p>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SLIDE 3 -->
                <div class="carousel-item">
                    <div class="hero-slide" style="background-image: url('img/rodolfo.jpg');">
                        <div class="container">
                            <div class="hero-content">
                                <span class="hero-badge">Empresas e parceiros</span>
                                <h1>Juntos, criamos oportunidades para <span>novos caminhos</span></h1>
                                <p>
                                    Padrinhos e parceiros impulsionam o projeto e colaboram para transformar
                                    aprendizado em oportunidades concretas para o futuro.
                                </p>

                                <div class="d-flex flex-wrap gap-3 mt-4">
                                    <a href="#jornada" class="btn btn-gt">Ver Jornada</a>
                                    <a href="#instagram" class="btn btn-light rounded-pill px-4 py-3 fw-bold">
                                        Ver bastidores
                                    </a>
                                </div>

                                <!-- <div class="hero-info-card">
                                    <strong>Impacto social e conexão com o futuro</strong>
                                    <p class="mb-0 small">
                                        Apoiar o Galera Tech é investir em formação, empregabilidade e inclusão digital.
                                    </p>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselHeroGaleraTech"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#carouselHeroGaleraTech"
                data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </section>

    <!-- IMPACTO -->
    <section class="impact-wrapper py-5">
        <div class="row g-4 justify-content-center">
            <div class="col-md-5 col-lg-3">
                <div class="impact-card">
                    <i class="bi bi-calendar-event"></i>
                    <h3 class="counter" data-target="5">0</h3>
                    <p class="mb-0">edições promovidas com estudantes da região.</p>
                </div>
            </div>

            <div class="col-md-5 col-lg-3">
                <div class="impact-card">
                    <i class="bi bi-clock-history"></i>
                    <h3 class="counter"
                        data-target="1200"
                        data-prefix="+"
                        data-suffix="h">
                        0
                    </h3>
                    <p class="mb-0">em aulas, mentorias e atividades práticas.</p>
                </div>
            </div>

            <div class="col-md-5 col-lg-3">
                <div class="impact-card">
                    <i class="bi bi-mortarboard"></i>
                    <h3 class="counter"
                        data-target="90"
                        data-prefix="+">
                        0
                    </h3>

                    <p class="mb-0">estudantes alcançados por tecnologia e novas oportunidades.</p>
                </div>
            </div>

            <div class="col-md-5 col-lg-3">
                <div class="impact-card">
                    <i class="bi bi-buildings"></i>
                    <h3 class="counter"
                        data-target="45"
                        data-prefix="+">
                        0
                    </h3>
                    <p class="mb-0">organizações parceiras.</p>
                </div>
            </div>

        </div>
    </section>

    <!-- SOBRE -->
    <section class="container section-padding" id="sobre">
        <div class="about-box">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <img src="img/img_2.jpeg" class="about-img" alt="Projeto Galera Tech">
                </div>

                <div class="col-lg-6">
                    <span class="tag">Sobre o projeto</span>
                    <h2 class="section-title">Mais do que uma formação em tecnologia</h2>

                    <p class="section-text mt-3">
                        O Galera Tech oferece formação gratuita para estudantes do ensino médio,
                        abordando programação, competências profissionais, empreendedorismo e aproximação
                        com o mercado de trabalho.
                    </p>

                    <p class="section-text">
                        A iniciativa busca proporcionar uma jornada prática, inclusiva e transformadora,
                        conectando participantes a empresas, profissionais e oportunidades concretas
                        no setor tecnológico.
                    </p>
                </div>
            </div>
        </div>
    </section>


    <!-- JORNADA -->
    <section class="journey section-padding" id="jornada">
        <div class="container">
            <div class="text-center mb-5">
                <span class="tag">Jornada do participante</span>
                <h2 class="section-title">Como funciona essa Jornada</h2>
                <p class="section-text mx-auto" style="max-width: 720px;">
                    Um percurso estruturado para que o jovem participe, aprenda, pratique,
                    amplie sua rede de contatos e descubra novas possibilidades.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-md-3">
                    <div class="step-card">
                        <div class="step-number">1</div>
                        <h5 class="fw-bold">Inscrição</h5>
                        <p>O jovem se inscreve e participa do processo de seleção.</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="step-card">
                        <div class="step-number">2</div>
                        <h5 class="fw-bold">Formação</h5>
                        <p>Aulas práticas com tecnologia, programação e desafios criativos.</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="step-card">
                        <div class="step-number">3</div>
                        <h5 class="fw-bold">Mentoria</h5>
                        <p>Contato com profissionais, empresas e experiências reais de mercado.</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="step-card">
                        <div class="step-number">4</div>
                        <h5 class="fw-bold">Futuro</h5>
                        <p>O aluno sai mais preparado para estudar, trabalhar e empreender.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- APRENDIZADO -->
    <section class="container-fluid " id="aprendizado">
        <div class="text-center mb-5">
            <span class="tag">Aprendizado</span>
            <h2 class="section-title text-white">O que o aluno desenvolve</h2>
            <p class="section-text mx-auto text-white" style="max-width: 740px;">
                A formação combina conhecimento técnico, competências humanas e visão de carreira.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="learn-card">
                    <i class="bi bi-code-slash"></i>
                    <h5>Programação</h5>
                    <p>Raciocínio lógico, desenvolvimento de soluções e primeiros códigos.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="learn-card">
                    <i class="bi bi-people"></i>
                    <h5>Trabalho em equipe</h5>
                    <p>Comunicação, colaboração, criatividade e responsabilidade coletiva.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="learn-card">
                    <i class="bi bi-lightbulb"></i>
                    <h5>Empreendedorismo</h5>
                    <p>Como transformar ideias em possibilidades reais de projeto e negócio.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="learn-card">
                    <i class="bi bi-briefcase"></i>
                    <h5>Carreira</h5>
                    <p>Contato com empresas, mercado de trabalho e oportunidades profissionais.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- PARA QUEM É -->
    <section class="container section-padding">
        <div class="audience-box">
            <div class="row align-items-center g-4">
                <div class="col-lg-5" id="para-quem">
                    <span class="tag tag-light">Para quem é</span>
                    <h2 class="fw-bold mt-3">Uma oportunidade para jovens que querem começar</h2>
                    <p class="mt-3">
                        O Galera Tech é voltado para estudantes que desejam conhecer tecnologia,
                        desenvolver habilidades e se aproximar do mercado.
                    </p>
                </div>

                <div class="col-lg-7">
                    <div class="row g-3" id="para-quem">
                        <div class="col-md-6">
                            <div class="audience-item">
                                <strong>Jovens do ensino médio</strong>
                                <p class="mb-0 small">Principalmente estudantes de escolas públicas.</p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="audience-item">
                                <strong>Iniciantes em tecnologia</strong>
                                <p class="mb-0 small">Não precisa ter experiência prévia para começar.</p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="audience-item">
                                <strong>Empresas apoiadoras</strong>
                                <p class="mb-0 small">Organizações que desejam investir em impacto social.</p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="audience-item">
                                <strong>Mentores e parceiros</strong>
                                <p class="mb-0 small">Profissionais que podem contribuir com conhecimento.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- EXPERIÊNCIAS -->
    <section class="experience-section section-padding" id="experiencias">
        <div class="container">
            <div class="row align-items-center mb-5">
                <div class="col-lg-7">
                    <span class="tag">Experiências</span>
                    <h2 class="section-title">Vivências que aproximam os jovens do mercado</h2>
                    <p class="section-text">
                        Além das aulas, o Galera Tech promove encontros, visitas, conversas e atividades que ampliam
                        a visão dos participantes sobre carreira, tecnologia e futuro.
                    </p>
                </div>
            </div>

            <div class="row g-4 align-items-stretch">
                <div class="col-lg-6">
                    <div class="experience-feature">
                        <img src="img/img_no-code.jpg" alt="Experiência Galera Tech">
                        <div class="experience-feature-content">
                            <h3 class="fw-bold">Tecnologia na prática</h3>
                            <p class="mb-0">
                                Os participantes entram em contato com desafios reais, profissionais e ambientes de
                                inovação.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="experience-card">
                                <div class="experience-icon">
                                    <i class="bi bi-building"></i>
                                </div>
                                <h5>Visitas técnicas</h5>
                                <p>Contato com ambientes reais de inovação e tecnologia.</p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="experience-card">
                                <div class="experience-icon">
                                    <i class="bi bi-person-video3"></i>
                                </div>
                                <h5>Palestras</h5>
                                <p>Conversas com profissionais e especialistas do mercado.</p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="experience-card">
                                <div class="experience-icon">
                                    <i class="bi bi-lightning-charge"></i>
                                </div>
                                <h5>Desafios práticos</h5>
                                <p>Atividades para criar, experimentar e resolver problemas.</p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="experience-card">
                                <div class="experience-icon">
                                    <i class="bi bi-people-fill"></i>
                                </div>
                                <h5>Networking</h5>
                                <p>Conexão com empresas, mentores, colegas e oportunidades.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>



    <!-- DEPOIMENTOS MODERNOS -->
    <section class="testimonials-modern section-padding" id="depoimentos">
        <div class="container">
            <div class="text-center mb-5">
                <span class="tag">Depoimentos</span>
                <h2 class="section-title">Histórias que mostram o impacto do Galera Tech</h2>
                <p class="section-text mx-auto" style="max-width: 720px;">
                    Alunos, padrinhos, mentores e parceiros compartilham como o projeto transforma trajetórias.
                </p>
            </div>

            <div class="row g-4 align-items-stretch">
                <div class="col-lg-7">
                    <div class="main-testimonial" id="depoimentoPrincipal">
                        <div class="quote-icon">
                            <i class="bi bi-quote"></i>
                        </div>

                        <p class="testimonial-text">
                            “O Galera Tech me mostrou que tecnologia também é para mim. Aprendi programação,
                            conheci pessoas incríveis e comecei a enxergar novas possibilidades para o meu futuro.”
                        </p>

                        <div class="d-flex align-items-center gap-3 mt-4">
                            <img src="" alt="Aluno Galera Tech">
                            <div>
                                <h5 class="mb-0">Nome do aluno</h5>
                                <small>Participante Galera Tech</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5" id="depoimentosLaterais">
                    <div class="side-testimonial mb-4">
                        <p>
                            “Eu vejo essa questão da Galera Tech como extremamente valiosa para essa nova juventude que vem. Ela possibilita a exploração de novos talentos e o ingresso desses novos alunos.”
                        </p>
                        <strong>André Ferreira</strong>
                        <small>Mercatus</small>
                    </div>

                    <div class="side-testimonial mb-4">
                        <p>
                            “O projeto aproxima os alunos da realidade do mercado e cria oportunidades concretas.”
                        </p>
                        <strong>Nome </strong>
                        <small>Profissional de tecnologia</small>
                    </div>

                    <div class="side-testimonial">
                        <p>
                            “Foi uma experiência que mudou minha visão sobre carreira, estudo e futuro.”
                        </p>
                        <strong>Nome </strong>
                        <small>Aluno Galera Tech</small>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- INSTAGRAM EM DESTAQUE -->
    <section class="instagram-section section-padding" id="instagram">
        <div class="container">
            <div class="row align-items-center mb-5">
                <div class="col-lg-7">
                    <span class="tag">Instagram</span>
                    <h2 class="section-title">Acompanhe os bastidores do Galera Tech</h2>
                    <p class="section-text">
                        Veja registros das aulas, experiências, alunos, padrinhos e momentos
                        que fazem parte dessa transformação.
                    </p>
                </div>

                <div class="col-lg-5 text-lg-end">
                    <a href="https://www.instagram.com/galera_tech/" target="_blank" class="btn btn-gt">
                        <i class="bi bi-instagram"></i> Seguir no Instagram
                    </a>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <a href="https://www.instagram.com/p/DYFjvrip62H/" class="insta-feature-card" target="_blank">
                        <img href="https://www.instagram.com/galera_tech/" src="img/img_video-re.jpg" alt="Post Instagram">
                        <div class="insta-content">
                            <span>Humor</span>
                            <h5>O que as pessoas pensam que é programar vs O que realmente é</h5>
                        </div>
                    </a>
                </div>

                <div class="col-md-6 col-lg-4">
                    <a href="https://www.instagram.com/p/DX9m7lguuWI/" class="insta-feature-card" target="_blank">
                        <img src="img/video_workshop.png" alt="Post Instagram">
                        <div class="insta-content">
                            <span>Workshop</span>
                            <h5>Contato com profissionais, mentores e oportunidades reais na área de TI</h5>
                        </div>
                    </a>
                </div>

                <div class="col-md-6 col-lg-4">
                    <a href="https://www.instagram.com/p/DY5TtDbGCtS/?img_index=1" class="insta-feature-card" target="_blank">
                        <img src="img/img_carrossel-c.png" alt="Post Instagram">
                        <div class="insta-content">
                            <span>Carrossel</span>
                            <h5>Costumes que todo aluno de TI tem</h5>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- CARROSSEL DE APOIOS E PARCEIROS -->
    <section class="partners-section section-padding" id="padrinhos">
        <div class="container">
            <div class="text-center mb-5">
                <span class="tag">Padrinhos</span>
                <h2 class="section-title">Quem acredita nessa transformação</h2>
                <p class="section-text mx-auto" style="max-width: 740px;">
                    O Galera Tech é fortalecido por instituições, empresas e profissionais que apoiam
                    a formação de jovens para o futuro da tecnologia.
                </p>
            </div>

            <div id="carouselPadrinhos" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2600">
                <div class="carousel-inner">
                    <!-- Primeira coluna do carrossel -->
                    <div class="carousel-item active">
                        <div class="row g-4 justify-content-center">
                            <div class="col-6 col-md-4 col-lg-2">
                                <div class="partner-slide-card">
                                    <img src="logoTratado/logo_padrinhos/apeti.webp" alt="Apeti">
                                    <span></span>
                                </div>
                            </div>

                            <div class="col-6 col-md-4 col-lg-2">
                                <div class="partner-slide-card">
                                    <img src="logoTratado/logo_padrinhos/senac.png" alt="Senac">
                                    <span></span>
                                </div>
                            </div>

                            <div class="col-6 col-md-4 col-lg-2">
                                <div class="partner-slide-card">
                                    <img src="logoTratado/logo_padrinhos/2sPortaria.png" alt="Padrinhos">
                                    <span></span>
                                </div>
                            </div>

                            <div class="col-6 col-md-4 col-lg-2">
                                <div class="partner-slide-card">
                                    <img src="logoTratado/logo_padrinhos/appSistemas.png" alt="Padrinhos">
                                    <span></span>
                                </div>
                            </div>

                            <div class="col-6 col-md-4 col-lg-2">
                                <div class="partner-slide-card">
                                    <img src="logoTratado/logo_padrinhos/atmOut.png" alt="Padrinhos">
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Segunda coluna do carrossel -->
                    <div class="carousel-item">
                        <div class="row g-4 justify-content-center">
                            <div class="col-6 col-md-4 col-lg-2">
                                <div class="partner-slide-card">
                                    <img src="logoTratado/logo_padrinhos/escale.png" alt="Padrinhos">
                                    <span></span>
                                </div>
                            </div>

                            <div class="col-6 col-md-4 col-lg-2">
                                <div class="partner-slide-card">
                                    <img src="logoTratado/logo_padrinhos/expressoSalome.png" alt="Padrinhos">
                                    <span></span>
                                </div>
                            </div>

                            <div class="col-6 col-md-4 col-lg-2">
                                <div class="partner-slide-card">
                                    <img src="logoTratado/logo_padrinhos/fielControl.png" alt="Padrinhos">
                                    <span></span>
                                </div>
                            </div>

                            <div class="col-6 col-md-4 col-lg-2">
                                <div class="partner-slide-card">
                                    <img src="logoTratado/logo_padrinhos/goldSystem.png" alt="Padrinhos">
                                    <span></span>
                                </div>
                            </div>

                            <div class="col-6 col-md-4 col-lg-2">
                                <div class="partner-slide-card">
                                    <img src="logoTratado/logo_padrinhos/gubolin.png" alt="Padrinhos">
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Terceira linha do carrossel -->
                    <div class="carousel-item">
                        <div class="row g-4 justify-content-center">
                            <div class="col-6 col-md-4 col-lg-2">
                                <div class="partner-slide-card">
                                    <img src="logoTratado/logo_padrinhos/gvc.png" alt="Padrinhos">
                                    <span></span>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 col-lg-2">
                                <div class="partner-slide-card">
                                    <img src="logoTratado/logo_padrinhos/hdauff.png" alt="Padrinhos">
                                    <span></span>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 col-lg-2">
                                <div class="partner-slide-card">
                                    <img src="logoTratado/logo_padrinhos/hublab.png" alt="Padrinhos">
                                    <span></span>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 col-lg-2">
                                <div class="partner-slide-card">
                                    <img src="logoTratado/logo_padrinhos/icav.png" alt="Padrinhos">
                                    <span></span>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 col-lg-2">
                                <div class="partner-slide-card">
                                    <img src="logoTratado/logo_padrinhos/informaS.png" alt="Padrinhos">
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Quarta coluna do carrossel -->
                    <div class="carousel-item">
                        <div class="row g-4 justify-content-center">
                            <div class="col-6 col-md-4 col-lg-2">
                                <div class="partner-slide-card">
                                    <img src="logoTratado/logo_padrinhos/mercatus.png" alt="Padrinhos">
                                    <span></span>
                                </div>
                            </div>

                            <div class="col-6 col-md-4 col-lg-2">
                                <div class="partner-slide-card">
                                    <img src="logoTratado/logo_padrinhos/netspeed.png" alt="Padrinhos">
                                    <span></span>
                                </div>
                            </div>

                            <div class="col-6 col-md-4 col-lg-2">
                                <div class="partner-slide-card">
                                    <img src="logoTratado/logo_padrinhos/ouro.png" alt="Padrinhos">
                                    <span></span>
                                </div>
                            </div>

                            <div class="col-6 col-md-4 col-lg-2">
                                <div class="partner-slide-card">
                                    <img src="logoTratado/logo_padrinhos/proansi.png" alt="Padrinhos">
                                    <span></span>
                                </div>
                            </div>

                            <div class="col-6 col-md-4 col-lg-2">
                                <div class="partner-slide-card">
                                    <img src="logoTratado/logo_padrinhos/shift.png" alt="Padrinhos">
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Qunta coluna do carrossel -->
                    <div class="carousel-item">
                        <div class="row g-4 justify-content-center">
                            <div class="col-6 col-md-4 col-lg-2">
                                <div class="partner-slide-card">
                                    <img src="logoTratado/logo_padrinhos/topaz.png" alt="Padrinhos">
                                    <span></span>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 col-lg-2">
                                <div class="partner-slide-card">
                                    <img src="logoTratado/logo_padrinhos/unimed.png" alt="Padrinhos">
                                    <span></span>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 col-lg-2">
                                <div class="partner-slide-card">
                                    <img src="logoTratado/logo_padrinhos/visualStudio.png" alt="Padrinhos">
                                    <span></span>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 col-lg-2">
                                <div class="partner-slide-card">
                                    <img src="logoTratado/logo_padrinhos/wztech.png" alt="Padrinhos">
                                    <span></span>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 col-lg-2">
                                <div class="partner-slide-card">
                                    <img src="logoTratado/logo_padrinhos/cashfast.png" alt="Padrinhos">
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button class="carousel-control-prev custom-carousel-arrow" type="button"
                        data-bs-target="#carouselPadrinhos" data-bs-slide="prev">
                        <i class="bi bi-chevron-left"></i>
                    </button>

                    <button class="carousel-control-next custom-carousel-arrow" type="button"
                        data-bs-target="#carouselPadrinhos" data-bs-slide="next">
                        <i class="bi bi-chevron-right"></i>
                    </button>
                </div>

                <!-- MINI APOIADORES ESTÁTICOS -->
                <div class="supporters-strip mt-5">
                    <p class="text-center mb-4">Apoiadores do Galera Tech</p>

                    <div class="supporters-logos">
                        <img src="logoTratado/logo_apoiadores/drUniforme.png" alt="Apoiador">
                        <img src="logoTratado/logo_apoiadores/maluf.png" alt="Apoiador">
                        <img src="logoTratado/logo_apoiadores/lzTecnologia.png" alt="Apoiador">
                        <img src="logoTratado/logo_apoiadores/tereos.png" alt="Apoiador">
                    </div>
                </div>
            </div>
    </section>

    <!-- FAQ -->
    <section class="faq-section section-padding" id="perguntas">
        <div class="container">

            <div class="text-center mb-5">
                <span class="tag">Dúvidas Frequentes</span>

                <h2 class="section-title">
                    Ainda ficou com alguma dúvida?
                </h2>

                <p class="section-text mx-auto" style="max-width: 720px;">
                    Reunimos as principais informações sobre o Galera Tech
                    para ajudar alunos, responsáveis, empresas e parceiros.
                </p>
            </div>

            <div class="faq-wrapper">

                <div class="accordion" id="faqAccordion">

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#faq1">
                                Quem pode participar do Galera Tech?
                            </button>
                        </h2>

                        <div id="faq1"
                            class="accordion-collapse collapse show"
                            data-bs-parent="#faqAccordion">

                            <div class="accordion-body">
                                O projeto é voltado principalmente para jovens
                                estudantes do ensino médio que desejam conhecer
                                tecnologia, desenvolver novas habilidades e se
                                aproximar do mercado de trabalho.
                            </div>

                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#faq2">

                                Preciso ter conhecimento em programação?
                            </button>
                        </h2>

                        <div id="faq2"
                            class="accordion-collapse collapse"
                            data-bs-parent="#faqAccordion">

                            <div class="accordion-body">
                                Não. O Galera Tech foi pensado para iniciantes,
                                permitindo que os participantes aprendam desde
                                os primeiros conceitos até experiências práticas.
                            </div>

                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#faq3">

                                O curso é gratuito?
                            </button>
                        </h2>

                        <div id="faq3"
                            class="accordion-collapse collapse"
                            data-bs-parent="#faqAccordion">

                            <div class="accordion-body">
                                Sim. A participação é gratuita graças ao apoio
                                de empresas, padrinhos e instituições parceiras
                                que acreditam na formação de jovens talentos.
                            </div>

                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#faq4">

                                Como as empresas podem apoiar o projeto?
                            </button>
                        </h2>

                        <div id="faq4"
                            class="accordion-collapse collapse"
                            data-bs-parent="#faqAccordion">

                            <div class="accordion-body">
                                Empresas podem atuar como padrinhas ou apoiadoras,
                                contribuindo para a formação dos
                                alunos e fortalecendo o ecossistema de tecnologia.
                            </div>

                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#faq5">

                                Os participantes recebem certificado?
                            </button>
                        </h2>

                        <div id="faq5"
                            class="accordion-collapse collapse"
                            data-bs-parent="#faqAccordion">

                            <div class="accordion-body">
                                Sim. Ao concluir a jornada formativa, os alunos
                                recebem certificação referente às atividades e
                                conteúdos desenvolvidos durante o projeto.
                            </div>

                        </div>
                    </div>

                </div>

            </div>

        </div>

        <div class="faq-contact-box">
            <h4>Ainda ficou com alguma dúvida?</h4>

            <p>
                Nossa equipe está pronta para ajudar você com informações sobre inscrições,
                participação no projeto, empresas apoiadoras e demais questões.
            </p>

            <a href="https://wa.me/5517996197053"
                target="_blank"
                class="btn btn-gt">
                <i class="bi bi-whatsapp"></i>
                Falar no WhatsApp
            </a>
        </div>

    </section>

    <!-- CTA FINAL -->
    <section class="container section-padding" id="contato">
        <div class="cta-final">
            <span class="tag tag-light">Faça parte</span>
            <h2 class="fw-bold mt-3 text-white">Ajude jovens a descobrirem um futuro na tecnologia</h2>
            <p class="mt-3 mb-4 text-white">
                Participe como aluno, padrinho, mentor, empresa apoiadora ou parceiro institucional.
            </p>

            <div class="d-flex justify-content-center flex-wrap gap-3">
                <a href="https://forms.gle/VkdRtm56oPH4AWgf9" class="btn btn-light rounded-pill px-4 py-3 fw-bold" target="_blank">Quero participar</a>
                <a href="https://wa.me/5517996442507" class="btn btn-outline-light rounded-pill px-4 py-3 fw-bold" target="_blank">Quero ser padrinho</a>
            </div>
        </div>
    </section>

    <!-- RODAPÉ -->
    <footer>
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4">
                    <img src="img/logo-galera-tech.png" class="footer-logo mb-3" alt="Galera Tech">
                    <p>
                        Formação gratuita em tecnologia para jovens, conectando educação,
                        empresas e oportunidades.
                    </p>
                </div>

                <div class="col-md-4">
                    <h5 class="fw-bold">Contato</h5>
                    <p class="mb-1">
                        <i class="bi bi-instagram"></i><a href="https://www.instagram.com/galera_tech/" target="_blank" class="cor">
                            @galera_tech
                        </a>
                    </p>
                    <p class="mb-1">
                        <i class="bi bi-whatsapp"></i><a href="https://wa.me/5517996197053" target="_blank" class="cor">
                            (17) 996197053
                        </a>
                    </p>
                    <p class="mb-1">
                        <i class="bi bi-geo-alt"></i><a href="https://www.google.com/maps/place/Parque+Tecnol%C3%B3gico+de+S%C3%A3o+Jos%C3%A9+do+Rio+Preto/@-20.8386925,-49.4239735,17z/data=!3m1!4b1!4m6!3m5!1s0x94bdb271863ec85d:0xe5c17d6c79075c16!8m2!3d-20.8386975!4d-49.4213986!16s%2Fg%2F11clgsq0g0?entry=ttu&g_ep=EgoyMDI2MDUyNS4wIKXMDSoASAFQAw%3D%3D" target="_blank" class="cor">
                            Parque Tecnológico de São José do Rio Preto
                        </a>
                    </p>
                </div>

                <div class="col-md-4">
                    <h5 class="fw-bold">Links úteis</h5>
                    <p class="mb-1">
                        <a href="https://www.apeti.org.br/" target="_blank" class="cor">
                            APETI
                        </a>
                    </p>
                    <p class="mb-1">
                        <a href="https://forms.gle/VkdRtm56oPH4AWgf9" target="_blank" class="cor">
                            Inscrições
                        </a>
                    </p>
                    <p class="mb-1">
                        <a href="https://wa.me/5517996442507" target="_blank" class="cor">
                            Seja padrinho
                        </a>
                    </p>
                </div>
            </div>

            <hr class="my-4">

            <p class="mb-1">
                <a href="admin/login.php" target="_blank" class="cor">
                    <i class="bi bi-shield-lock"></i>
                    Portal Administrativo
                </a>
            </p>


            <div class="text-center">
                <small>© 2026 Galera Tech | Powered by Apeti. Todos os direitos reservados.</small>
            </div>
        </div>
    </footer>

    <!-- WHATSAPP FIXO -->
    <a href="https://wa.me/5517996197053" class="whatsapp-fixed" target="_blank" aria-label="WhatsApp">
        <i class="bi bi-whatsapp"></i>
    </a>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Botão de modo de cores -->
    <button id="theme-toggle">
        <i class="bi bi-moon-fill"></i>
    </button>
    <!-- script para o modo de cores -->
    <script src="modecores.js"></script>
    <!-- script para depoimentos -->
    <script src="depoimentos.js"></script>
    <!-- script para animação nos numeros -->
    <script src="numeros.js"></script>
    <!-- botão do VLibras -->
    <div vw class="enabled">
        <div vw-access-button class="active"></div>
        <div vw-plugin-wrapper>
            <div class="vw-plugin-top-wrapper"></div>
        </div>
    </div>

    <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>

    <script>
        new window.VLibras.Widget('https://vlibras.gov.br/app');
    </script>
</body>

</html>