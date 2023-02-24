window.onload = () => {
    $("#bt_buscar").click(function(ev){
        ev.preventDefault();

        let categoria = $("#categoria").val();
        let busca = $("#busca").val();

        const url = new URLSearchParams();

        if (categoria !== "") {
            url.append("categoria", categoria);
        }

        if (busca !== "") {
            url.append("busca", busca);
        }

        if (url.toString() !== "") {
            window.location = `?${url.toString()}`;
        } else {
            alert("Informe um palavra para realizar a busca.")
        }
    });
}
