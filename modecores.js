document.addEventListener("DOMContentLoaded", function () {

    const botao = document.getElementById("theme-toggle");

    botao.addEventListener("click", function () {

        document.body.classList.toggle("dark-mode");

        const icon = botao.querySelector("i");

        if(document.body.classList.contains("dark-mode")){

            icon.classList.remove("bi-moon-fill");
            icon.classList.add("bi-sun-fill");

        } else {

            icon.classList.remove("bi-sun-fill");
            icon.classList.add("bi-moon-fill");

        }

    });

});

