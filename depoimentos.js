        function escaparHTML(valor) {
            const div = document.createElement("div");
            div.textContent = valor ?? "";
            return div.innerHTML;
        }

        function montarCargo(depoimento) {
            const cargo = depoimento.cargo || "";
            const empresa = depoimento.empresa || "";
            if (cargo && empresa) {
                return `${cargo} - ${empresa}`;
            }
            return cargo || empresa || depoimento.tipo || "Depoimento Galera Tech";
        }

        async function carregarDepoimentos() {
            const principal = document.getElementById("depoimentoPrincipal");
            const laterais = document.getElementById("depoimentosLaterais");

            try {
                const resposta = await fetch("api/depoimentos.php", {
                    cache: "no-store"
                });

                if (!resposta.ok) {
                    throw new Error("Erro ao buscar depoimentos");
                }

                const dados = await resposta.json();

                if (!dados.principal) {
                    principal.innerHTML = `
                        <div class="quote-icon"><i class="bi bi-quote"></i></div>
                        <p class="testimonial-text">Ainda não há depoimentos cadastrados.</p>
                    `;
                    laterais.innerHTML = "";
                    return;
                }

                const fotoPrincipal = dados.principal.foto || "img\logo-galera-tech.png";

                principal.innerHTML = `
                    <div class="quote-icon">
                        <i class="bi bi-quote"></i>
                    </div>

                    <p class="testimonial-text">
                        “${escaparHTML(dados.principal.texto)}”
                    </p>

                    <div class="d-flex align-items-center gap-3 mt-4">
                        <img src="${escaparHTML(fotoPrincipal)}" alt="${escaparHTML(dados.principal.nome)}">
                        <div>
                            <h5 class="mb-0">${escaparHTML(dados.principal.nome)}</h5>
                            <small>${escaparHTML(montarCargo(dados.principal))}</small>
                        </div>
                    </div>
                `;

                laterais.innerHTML = "";

                dados.laterais.forEach((depoimento, indice) => {
                    const margem = indice < dados.laterais.length - 1 ? "mb-4" : "";

                    laterais.innerHTML += `
                        <div class="side-testimonial ${margem}">
                            <p>“${escaparHTML(depoimento.texto)}”</p>
                            <strong>${escaparHTML(depoimento.nome)}</strong>
                            <small>${escaparHTML(montarCargo(depoimento))}</small>
                        </div>
                    `;
                });

            } catch (erro) {
                console.error(erro);

                principal.innerHTML = `
                    <div class="quote-icon"><i class="bi bi-quote"></i></div>
                    <p class="testimonial-text">
                        Não foi possível carregar os depoimentos no momento.
                    </p>
                `;

                laterais.innerHTML = "";
            }
        }

        document.addEventListener("DOMContentLoaded", carregarDepoimentos);