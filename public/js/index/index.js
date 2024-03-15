window.onload = function () {
    $("#startModal").modal("show");
    var dados = [];
    dados["id"] = 1;
    clickCircle(dados);
    var htmlElement = document.documentElement;
    var bodyElement = document.body;

    var height = Math.max(
        htmlElement.clientHeight,
        htmlElement.scrollHeight,
        htmlElement.offsetHeight,
        bodyElement.scrollHeight,
        bodyElement.offsetHeight
    );

    //console.log("entire document height: " + height + "px");
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
                    /*"<br>" +
                    "<p>" +
                    item.nome_produto +
                    "</p>" +*/
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
