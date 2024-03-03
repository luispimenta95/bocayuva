function alteraStatus(id, status) {
    mensagem =
        status == 0 ? "Deseja ativar esta obra?" : "Deseja inativar esta obra?";
    newStatus = status == 0 ? 1 : 0;

    if (confirm(mensagem)) {
        $.ajax({
            url: "/atualizar-reforma",
            type: "POST",
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
            data: {
                id_reforma: id,
                status: newStatus,
            },
            success: function () {
                window.location.href = "/lista-reformas";
            },
        });
    }
}
function atualizaReforma(id) {
    $.ajax({
        url: "/get-reforma/" + id,
        type: "POST",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        data: {
            id: id,
        },
        success: function (data) {
            $("#id_reforma").val(data.id);
            $("#update_propietario").val(data.propietario);
            $("#update_dataReforma").val(data.data_reforma);
            $("#update_descricao").val(data.descricao);
            $("#edicao").modal("show");
        },
    });
}
