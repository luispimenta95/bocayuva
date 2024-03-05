function clickCircle(data) {
    var id = data.id;

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
            console.log(response.produtos);
            $.each(response.produtos, function (index, value) {
                $(".isotope-container").append(
                    '<input type="checkbox" value="' +
                        value.nome_produto +
                        '" name="days[]"  > ' +
                        value.nome_produto +
                        "<br/>"
                );

                console.log(
                    "My array has at position " +
                        index +
                        ", this value: " +
                        value.nome_produto
                );
            });
        },
    });
}
