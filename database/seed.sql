INSERT INTO admins (nome, email, senha_hash, ativo) VALUES
('Administrador', 'admin@galeratech.local', '$2y$10$gJCKKzv9v5xPbxEdTXDoLeNfEWNnNVXKJdXuhXqNo2a2rG0lkvBvy', 1);

INSERT INTO site_config
(titulo_site, descricao_site, logo, texto_botao_menu, instagram, instagram_link, whatsapp_formatado, whatsapp_link, endereco, texto_rodape, link_apeti, link_inscricao, link_padrinho)
VALUES
('Galera Tech - Powered by Apeti', 'Formação gratuita em tecnologia para jovens.', 'assets/img/logo-galera-tech.svg', 'Participar', '@galeratech', 'https://instagram.com/galeratech', '(17) 99999-9999', 'https://wa.me/5517999999999', 'São José do Rio Preto - SP', 'Formação gratuita em tecnologia para jovens, conectando educação, empresas e oportunidades.', '#', '#', '#');

INSERT INTO hero_slides
(tag, titulo_html, subtitulo, texto_botao_1, link_botao_1, texto_botao_2, link_botao_2, card_titulo, card_texto, imagem, ordem, ativo)
VALUES
('Capacitação gratuita em tecnologia', 'Jovens preparados para o <span>futuro da tecnologia</span>', 'O Galera Tech conecta estudantes, empresas, mentores e oportunidades reais para transformar conhecimento em carreira, autonomia e futuro profissional.', 'Quero participar', '#contato', 'Quero apoiar', '#padrinhos', 'Powered by Apeti', 'Uma iniciativa conectada ao ecossistema de tecnologia e inovação de Rio Preto.', 'assets/img/placeholder.svg', 1, 1),
('Aprender, praticar e se conectar', 'Experiências que aproximam jovens do <span>mercado</span>', 'Aulas práticas, desafios, mentorias e contato com profissionais ajudam os participantes a enxergar caminhos possíveis dentro da tecnologia.', 'Ver experiências', '#experiencias', 'Conheça o projeto', '#sobre', 'Formação com propósito', 'Tecnologia, carreira, empreendedorismo e desenvolvimento humano em uma jornada prática.', 'assets/img/placeholder.svg', 2, 1),
('Empresas, mentores e parceiros', 'Juntos, abrimos portas para <span>novas trajetórias</span>', 'Padrinhos e parceiros fortalecem o projeto e ajudam jovens a transformar aprendizado em possibilidades reais de futuro.', 'Quero ser parceiro', '#padrinhos', 'Ver bastidores', '#instagram', 'Impacto social e conexão com o futuro', 'Apoiar o Galera Tech é investir em formação, empregabilidade e inclusão digital.', 'assets/img/placeholder.svg', 3, 1);

INSERT INTO indicadores (icone, numero, descricao, ordem, ativo) VALUES
('bi-calendar-event', '+10', 'edições realizadas com jovens da região.', 1, 1),
('bi-clock-history', '+500h', 'de aulas, mentorias e experiências práticas.', 2, 1),
('bi-mortarboard', '+2.000', 'alunos impactados por tecnologia e oportunidades.', 3, 1);

INSERT INTO sobre (tag, titulo, texto_1, texto_2, imagem, alt_imagem) VALUES
('Sobre o projeto', 'Muito além de um curso de tecnologia', 'O Galera Tech é uma iniciativa de formação gratuita para jovens do ensino médio, com foco em programação, habilidades profissionais, empreendedorismo e conexão com o mercado.', 'A proposta é criar uma experiência prática, acolhedora e transformadora, aproximando os participantes de empresas, profissionais e oportunidades reais no setor de tecnologia.', 'assets/img/placeholder.svg', 'Projeto Galera Tech');

INSERT INTO jornada (numero, titulo, descricao, ordem, ativo) VALUES
('1', 'Inscrição', 'O jovem se inscreve e participa do processo de seleção.', 1, 1),
('2', 'Formação', 'Aulas práticas com tecnologia, programação e desafios criativos.', 2, 1),
('3', 'Mentoria', 'Contato com profissionais, empresas e experiências reais de mercado.', 3, 1),
('4', 'Futuro', 'O aluno sai mais preparado para estudar, trabalhar e empreender.', 4, 1);

INSERT INTO aprendizado (icone, titulo, descricao, ordem, ativo) VALUES
('bi-code-slash', 'Programação', 'Raciocínio lógico, desenvolvimento de soluções e primeiros códigos.', 1, 1),
('bi-people', 'Trabalho em equipe', 'Comunicação, colaboração, criatividade e responsabilidade coletiva.', 2, 1),
('bi-lightbulb', 'Empreendedorismo', 'Como transformar ideias em possibilidades reais de projeto e negócio.', 3, 1),
('bi-briefcase', 'Carreira', 'Contato com empresas, mercado de trabalho e oportunidades profissionais.', 4, 1);

INSERT INTO publico (titulo, descricao, ordem, ativo) VALUES
('Jovens do ensino médio', 'Principalmente estudantes de escolas públicas.', 1, 1),
('Iniciantes em tecnologia', 'Não precisa ter experiência prévia para começar.', 2, 1),
('Empresas apoiadoras', 'Organizações que desejam investir em impacto social.', 3, 1),
('Mentores e parceiros', 'Profissionais que podem contribuir com conhecimento.', 4, 1);

INSERT INTO experiencias (icone, titulo, descricao, imagem, destaque, ordem, ativo) VALUES
('bi-stars', 'Tecnologia na prática', 'Os participantes entram em contato com desafios reais, profissionais e ambientes de inovação.', 'assets/img/placeholder.svg', 1, 1, 1),
('bi-building', 'Visitas técnicas', 'Contato com ambientes reais de inovação e tecnologia.', NULL, 0, 2, 1),
('bi-person-video3', 'Palestras', 'Conversas com profissionais e especialistas do mercado.', NULL, 0, 3, 1),
('bi-lightning-charge', 'Desafios práticos', 'Atividades para criar, experimentar e resolver problemas.', NULL, 0, 4, 1),
('bi-people-fill', 'Networking', 'Conexão com empresas, mentores, colegas e oportunidades.', NULL, 0, 5, 1);

INSERT INTO depoimentos (nome, cargo, texto, foto, destaque, ordem, ativo) VALUES
('Nome do aluno', 'Participante Galera Tech', 'O Galera Tech me mostrou que tecnologia também é para mim. Aprendi programação, conheci pessoas incríveis e comecei a enxergar novas possibilidades para o meu futuro.', 'assets/img/avatar.svg', 1, 1, 1),
('Nome do padrinho', 'Empresa apoiadora', 'Apoiar o Galera Tech é investir em jovens talentos e no futuro da tecnologia em Rio Preto.', 'assets/img/avatar.svg', 0, 2, 1),
('Nome do mentor', 'Profissional de tecnologia', 'O projeto aproxima os alunos da realidade do mercado e cria oportunidades concretas.', 'assets/img/avatar.svg', 0, 3, 1),
('Nome do participante', 'Aluno Galera Tech', 'Foi uma experiência que mudou minha visão sobre carreira, estudo e futuro.', 'assets/img/avatar.svg', 0, 4, 1);

INSERT INTO instagram_posts (categoria, titulo, imagem, link, ordem, ativo) VALUES
('Aulas práticas', 'Jovens criando seus primeiros projetos em tecnologia', 'assets/img/placeholder.svg', '#', 1, 1),
('Conexões', 'Contato com empresas, mentores e oportunidades reais', 'assets/img/placeholder.svg', '#', 2, 1),
('Experiências', 'Bastidores de uma jornada de transformação', 'assets/img/placeholder.svg', '#', 3, 1);

INSERT INTO parceiros (nome, logo, link, destaque_carrossel, ordem, ativo) VALUES
('Apeti', 'assets/img/logo-galera-tech.svg', '#', 1, 1, 1),
('Senac', 'assets/img/placeholder.svg', '#', 1, 2, 1),
('Parceiro 1', 'assets/img/placeholder.svg', '#', 1, 3, 1),
('Parceiro 2', 'assets/img/placeholder.svg', '#', 1, 4, 1),
('Parceiro 3', 'assets/img/placeholder.svg', '#', 1, 5, 1),
('Parceiro 4', 'assets/img/placeholder.svg', '#', 1, 6, 1),
('Parceiro 5', 'assets/img/placeholder.svg', '#', 1, 7, 1),
('Parceiro 6', 'assets/img/placeholder.svg', '#', 1, 8, 1),
('Mini apoio 1', 'assets/img/placeholder.svg', '#', 0, 9, 1),
('Mini apoio 2', 'assets/img/placeholder.svg', '#', 0, 10, 1),
('Mini apoio 3', 'assets/img/placeholder.svg', '#', 0, 11, 1),
('Mini apoio 4', 'assets/img/placeholder.svg', '#', 0, 12, 1);

INSERT INTO cta (tag, titulo, descricao, texto_botao_1, link_botao_1, texto_botao_2, link_botao_2) VALUES
('Faça parte', 'Ajude jovens a descobrirem um futuro na tecnologia', 'Participe como aluno, padrinho, mentor, empresa apoiadora ou parceiro institucional.', 'Quero participar', '#', 'Quero apoiar', '#');
