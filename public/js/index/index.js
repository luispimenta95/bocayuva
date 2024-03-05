window.onload = function () {
    var dados = [];
    dados["id"] = 1;
    clickCircle(dados);
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
            var posts = "";
            classe = "col-lg-4 col-md-6 portfolio-item";
            filtro = "isotope-item filter-" + response.categoria;
            classe += " " + filtro;
            response.produtos.forEach((item) => {
                posts +=
                    "<div class='" +
                    classe +
                    "'>" +
                    item.nome_produto +
                    "</div>";
            });
            classe = "col-lg-4 col-md-6 portfolio-item";

            $("#produtos").html(posts);
        },
    });
}
