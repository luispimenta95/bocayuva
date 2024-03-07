function alteraStatus(id, status) {
    mensagem =
        status == 0
            ? "Deseja ativar esta postagem?"
            : "Deseja inativar esta postagem?";
    newStatus = status == 0 ? 1 : 0;

    if (confirm(mensagem)) {
        $.ajax({
            url: "/atualizar-post",
            type: "POST",
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
            data: {
                id_post: id,
                status: newStatus,
            },
            success: function () {
                window.location.href = "/lista-posts";
            },
        });
    }
}
function atualizaPost(id) {
    $.ajax({
        url: "/get-post/" + id,
        type: "POST",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        data: {
            id: id,
        },
        success: function (data) {
            $("#id_post").val(data.id);
            $("#update_link").val(data.link);

            $("#edicao").modal("show");
        },
    });
}
$("#btnImg").click(function () {
    $("#imgReforma").fadeIn(200);
});
