function alteraStatus(id, status) {
    mensagem =
        status == 0
            ? "Deseja ativar este produto?"
            : "Deseja inativar este produto?";
    newStatus = status == 0 ? 1 : 0;

    if (confirm(mensagem)) {
        $.ajax({
            url: "/atualizar-produto",
            type: "POST",
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
            data: {
                id_produto: id,
                status: newStatus,
            },
            success: function () {
                window.location.href = "/lista-produtos";
            },
        });
    }
}
function atualizaProduto(id) {
    $.ajax({
        url: "/get-produto/" + id,
        type: "POST",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        data: {
            id: id,
        },
        success: function (data) {
            $("#id_produto").val(data.id);
            $("#update_produto").val(data.nome_produto);
            $("#update_descricao").val(data.descricao);
            $("#update_valorProduto").val(data.valor);
            $("#edicao").modal("show");
        },
    });
}

function ativaPromocao(id, promocao) {
    mensagem =
        promocao == 0
            ? "Deseja ativar a promoção deste produto?"
            : "Deseja inativar a promoção deste produto?";
    stsPromocao = promocao == 0 ? 1 : 0;

    if (confirm(mensagem)) {
        $.ajax({
            url: "/atualizar-produto",
            type: "POST",
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
            data: {
                id_produto: id,
                promocao: stsPromocao,
            },
            success: function () {
                window.location.href = "/lista-produtos";
            },
        });
    }
}
