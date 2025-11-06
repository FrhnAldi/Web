const pages = document.querySelectorAll(".card-page");
const pageLinks = document.querySelectorAll(".page-link");

pageLinks.forEach((link) => {
    link.addEventListener("click", (e) => {
        e.preventDefault();
        const pageNum = link.getAttribute("data-page");
        pages.forEach((p) => p.classList.add("d-none"));
        document.getElementById(`page${pageNum}`).classList.remove("d-none");
        pageLinks.forEach((l) => l.classList.remove("active"));
        link.classList.add("active");
    });
});
