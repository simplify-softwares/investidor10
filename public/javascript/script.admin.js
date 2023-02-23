$(".bt_excluir_noticia").click(function(ev){
    ev.preventDefault();
    let url = $(this).prop('href');
    let $this = $(this);

    if (confirm("Deseja excluir essa notícia?")) {
        $.ajax({
            url,
            dataType: "json",
            method: "delete",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            success: function (response) {
                if (response.status === "success") {

                    let origem = $this.data('origem');

                    if (origem === 'listagem') {
                        $this.parents('tr').fadeOut('slow', function () {
                            $(this).remove();
                        });
                        let html = `<div class="alert alert-success alert-dismissible fade show">
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        <strong>${response.mensagem}</strong>
                                    </div>`;
                        $("#message-empty").html(html);
                    }

                    if (origem === 'visualizar') {
                        alert(response.mensagem);
                        window.location = '/painel/news';
                    }
                }
            }
        })
    }
})
