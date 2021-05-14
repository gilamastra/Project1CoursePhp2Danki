$(function () {
  $(".botao-menu-mobile").click(function () {
    var listaMenu = $("nav.mobile ul");
    if (listaMenu.is(":hidden") == true) {
      var icone = $(".botao-menu-mobile").find("i");
      listaMenu.slideToggle();
      icone.removeClass("fa-bars");
      icone.addClass("fa-times");
    } else {
      var icone = $(".botao-menu-mobile").find("i");

      listaMenu.slideToggle();
      icone.removeClass("fa-times");
      icone.addClass("fa-bars");
    }
  });
});
