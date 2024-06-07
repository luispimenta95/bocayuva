window.onload = function () {
   // $("#startModal").modal("show");
    var dados = [];
    dados["id"] = 1;
    clickCircle(dados);
  const body = document.body;
const html = document.documentElement;
const height = Math.max(body.scrollHeight, body.offsetHeight,
  html.clientHeight, html.scrollHeight, html.offsetHeight);
  const lar = Math.max(
    document.documentElement["clientWidth"],
    document.body["scrollWidth"],
    document.documentElement["scrollWidth"],
    document.body["offsetWidth"],
    document.documentElement["offsetWidth"]
);
console.log(height)
console.log(lar);
};
function clickCircle(dados) {
    var id = dados.id;

    $.ajax({
        url: "/get-produtos-categoria/" + id,
        type: "POST",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        data: {
            id: id,
        },
        success: function (response) {
            var posts = "<div class='row'>";

            classe = "col-lg-4 col-md-6 portfolio-item";
            filtro = "isotope-item " + response.categoria;
            classe += " " + filtro;
            $("#produtos").html("");
            response.produtos.forEach((item) => {
                posts += "<div class='col-md-4'>";
                imgPath = "img/produtos/" + item.imagem_produto + "";
                posts +=
                    "<img class='img-fluid' src='" +
                    imgPath +
                    "' alt='' />" +
                    "<br>" +
                    "<h4 class='text-center'>" +
                    item.nome_produto +
                    "</h4>" +
                      "<br>" +
                    "<h4 class='text-center'>R$" +
                    item.valor +
                    "</h4>" +
                    "</div>";

                $("#produtos").html(posts);
                classe = "col-lg-4 col-md-6 portfolio-item";
            });
            $("#produtos").append("</div>");
        },
    });
}
$("#btnModal").on("click", function () {
    $("#startModal").modal("hide");
});
