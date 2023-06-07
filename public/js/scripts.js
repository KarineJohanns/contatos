function handleCredentialResponse(e) {
    let n = jwt_decode(e.cedential);
    console.log(n);
}
window.onload = function () {
    google.accounts.id.initialize({
        client_id:
            "551723582206-8kse6a5g163pas3rg3sq7n0rnkvsoek1.apps.googleusercontent.com",
        callback: handleCredentialResponse,
    }),
        google.accounts.id.renderButton(document.getElementById("buttonDiv"), {
            theme: "outline",
            size: "large",
            width: "378",
            logo_alignment: "center",
        }),
        google.accounts.id.prompt();
};
function limpa_formulário_cep() {
    (document.getElementById("rua").value = ""),
        (document.getElementById("cidade").value = ""),
        (document.getElementById("estado").value = "");
}
function meu_callback(e) {
    "erro" in e
        ? (limpa_formulário_cep(), alert("CEP n\xe3o encontrado."))
        : ((document.getElementById("rua").value = e.logradouro),
          (document.getElementById("cidade").value = e.localidade),
          (document.getElementById("estado").value = e.uf));
}
function pesquisacep(e) {
    var l = e.replace(/\D/g, "");
    if ("" != l) {
        if (/^[0-9]{8}$/.test(l)) {
            (document.getElementById("rua").value = "..."),
                (document.getElementById("cidade").value = "..."),
                (document.getElementById("estado").value = "...");
            var a = document.createElement("script");
            (a.src =
                "https://viacep.com.br/ws/" +
                l +
                "/json/?callback=meu_callback"),
                document.body.appendChild(a);
        } else limpa_formulário_cep(), alert("Formato de CEP inv\xe1lido.");
    } else limpa_formulário_cep();
}
