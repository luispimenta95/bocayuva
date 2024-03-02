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
                id: id,
                status: newStatus,
            },
            success: function (data) {
                window.location.href = "/lista-reformas";
            },
        });
    }
}
