/* =========================
   ACESSIBILIDADE
========================= */

const accessibilityToggle =
    document.getElementById("accessibilityToggle");

const accessibilityPanel =
    document.getElementById("accessibilityPanel");

accessibilityToggle.addEventListener("click", () => {
    accessibilityPanel.classList.toggle("active");
});

let currentFontSize = 100;

document
.getElementById("font-plus")
.addEventListener("click", () => {

    currentFontSize += 10;

    document.documentElement.style.fontSize =
        currentFontSize + "%";
});

document
.getElementById("font-minus")
.addEventListener("click", () => {

    currentFontSize -= 10;

    document.documentElement.style.fontSize =
        currentFontSize + "%";
});