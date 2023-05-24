const btn = document.querySelectorAll("#btn-add");
const section = document.querySelector(".new-contact-container");
const overlay = document.querySelector("#overlay");
const cancelar = document.querySelector("#cancelar");

// Busca CEP
function limpa_formulário_cep() {
    //Limpa valores do formulário de cep.
    document.getElementById("rua").value = "";
    document.getElementById("cidade").value = "";
    document.getElementById("estado").value = "";
}

function meu_callback(conteudo) {
    if (!("erro" in conteudo)) {
        //Atualiza os campos com os valores.
        document.getElementById("rua").value = conteudo.logradouro;
        document.getElementById("cidade").value = conteudo.localidade;
        document.getElementById("estado").value = conteudo.uf;
    } //end if.
    else {
        //CEP não Encontrado.
        limpa_formulário_cep();
        alert("CEP não encontrado.");
    }
}

function pesquisacep(valor) {
    //Nova variável "cep" somente com dígitos.
    var cep = valor.replace(/\D/g, "");

    //Verifica se campo cep possui valor informado.
    if (cep != "") {
        //Expressão regular para validar o CEP.
        var validacep = /^[0-9]{8}$/;

        //Valida o formato do CEP.
        if (validacep.test(cep)) {
            //Preenche os campos com "..." enquanto consulta webservice.
            document.getElementById("rua").value = "...";
            document.getElementById("cidade").value = "...";
            document.getElementById("estado").value = "...";

            //Cria um elemento javascript.
            var script = document.createElement("script");

            //Sincroniza com o callback.
            script.src =
                "https://viacep.com.br/ws/" +
                cep +
                "/json/?callback=meu_callback";

            //Insere script no documento e carrega o conteúdo.
            document.body.appendChild(script);
        } //end if.
        else {
            //cep é inválido.
            limpa_formulário_cep();
            alert("Formato de CEP inválido.");
        }
    } //end if.
    else {
        //cep sem valor, limpa formulário.
        limpa_formulário_cep();
    }
}

// validações

var forms = document.querySelectorAll(".myForm");

forms.forEach(function (form) {
    form.addEventListener("submit", function (event) {
        event.preventDefault(); // Impede o envio padrão do formulário

        var nameInputs = form.getElementsByClassName("nome");
        var phoneNumberInputs = form.getElementsByClassName("celular");
        console.log("clicou");

        for (var i = 0; i < nameInputs.length; i++) {
            var nameInput = nameInputs[i];
            var phoneNumberInput = phoneNumberInputs[i];

            if (
                nameInput.value.trim() === "" ||
                phoneNumberInput.value.trim() === ""
            ) {
                // Adiciona a classe CSS para definir a borda vermelha
                if (nameInput.value.trim() === "") {
                    nameInput.classList.add("border-danger");
                }

                if (phoneNumberInput.value.trim() === "") {
                    phoneNumberInput.classList.add("border-danger");
                }

                // Cria ou atualiza os elementos <span> para mostrar a mensagem de campo obrigatório
                if (nameInput.value.trim() === "") {
                    criarOuAtualizarMensagemCampoObrigatorio(
                        nameInput,
                        "Campo obrigatório"
                    );
                }

                if (phoneNumberInput.value.trim() === "") {
                    criarOuAtualizarMensagemCampoObrigatorio(
                        phoneNumberInput,
                        "Campo obrigatório"
                    );
                }
            }
        }
    });
});

var nameInputs = document.getElementsByClassName("nome");

for (var i = 0; i < nameInputs.length; i++) {
    nameInputs[i].addEventListener("input", function () {
        var nameInput = this;

        // Remove a classe CSS para remover a borda vermelha
        if (nameInput.value.trim() !== "") {
            nameInput.classList.remove("border-danger");

            // Remove a mensagem de campo obrigatório
            removerMensagemCampoObrigatorio(nameInput);
        }
    });
}

var phoneNumberInputs = document.getElementsByClassName("celular");

for (var i = 0; i < phoneNumberInputs.length; i++) {
    phoneNumberInputs[i].addEventListener("input", function () {
        var phoneNumberInput = this;

        // Remove a classe CSS para remover a borda vermelha
        if (phoneNumberInput.value.trim() !== "") {
            phoneNumberInput.classList.remove("border-danger");

            // Remove a mensagem de campo obrigatório
            removerMensagemCampoObrigatorio(phoneNumberInput);
        }
    });
}

function criarOuAtualizarMensagemCampoObrigatorio(elemento, mensagem) {
    var mensagemElement = document.getElementById("mensagem-" + elemento.id);

    if (mensagemElement) {
        mensagemElement.textContent = mensagem;
    } else {
        var span = document.createElement("span");
        span.classList.add("mensagem-campo-obrigatorio");
        span.textContent = mensagem;
        span.id = "mensagem-" + elemento.id;

        var parentElement = elemento.parentNode;
        parentElement.appendChild(span);
    }
}

function removerMensagemCampoObrigatorio(elemento) {
    var mensagemElement = document.getElementById("mensagem-" + elemento.id);

    if (mensagemElement) {
        mensagemElement.parentNode.removeChild(mensagemElement);
    }
}
