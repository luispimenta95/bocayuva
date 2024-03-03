function alteraStatus(id, status) {
    mensagem =
        status == 0
            ? "Deseja ativar esta categoria?"
            : "Deseja inativar esta categoria?";
    newStatus = status == 0 ? 1 : 0;

    if (confirm(mensagem)) {
        $.ajax({
            url: "/atualizar-categoria",
            type: "POST",
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
            data: {
                id_categoria: id,
                status: newStatus,
            },
            success: function () {
                window.location.href = "/lista-categorias";
            },
        });
    }
}
function atualizacategoria(id) {
    $.ajax({
        url: "/get-categoria/" + id,
        type: "POST",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        data: {
            id: id,
        },
        success: function (data) {
            $("#id_categoria").val(data.id);
            $("#update_categoria").val(data.nome_categoria);
            $("#edicao").modal("show");
        },
    });
}
