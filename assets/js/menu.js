botaoMenu = document.querySelector(".botao-menu");
menuLateral = document.querySelector(".menu-lateral");

botaoMenu.addEventListener('click', () => {
    botaoMenu = menuLateral.classList.toggle("menu-lateral--ativo");
});