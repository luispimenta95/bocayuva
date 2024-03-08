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
            var posts = "<div class='row'>";
            /*
 <div class="col-lg-4 col-md-6 portfolio-item isotope-item Teste">
                            <img src=" {{URL('img/masonry-portfolio/masonry-portfolio-1.jpg')}}" class="img-fluid" alt="" />
                            <div class="portfolio-info">
                                <h4>App 1</h4>
                                <p>Lorem ipsum, dolor sit</p>
                                <a href="{{URL('img/masonry-portfolio/masonry-portfolio-1.jpg')}}" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
            */
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
                    "</div>";

                $("#produtos").html(posts);
                classe = "col-lg-4 col-md-6 portfolio-item";
            });
            $("#produtos").append("</div>");
        },
    });
}
