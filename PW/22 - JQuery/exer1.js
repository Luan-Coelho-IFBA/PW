$(document).ready(function () {
  $("#slide img:eq(0)").addClass("ativo").show();

  function slide() {
    if ($(".ativo").next().size()) {
      $(".ativo")
        .fadeOut()
        .removeClass("ativo")
        .next()
        .fadeIn()
        .addClass("ativo");
    } else {
      $(".ativo").fadeOut().removeClass("ativo");
      $("#slide img:eq(0)").fadeIn().addClass("ativo");
    }
  }

  $("#slide").click(function () {
    slide();
  });
});
