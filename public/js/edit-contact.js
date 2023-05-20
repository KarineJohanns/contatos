const editBtn = document.querySelectorAll(".btn-edit");
const edit = document.querySelector(".edit-contact-container");
const overlayEdit = document.querySelector("#overlayEdit");
const cancelarEdit = document.querySelector("#cancelarEdit");

const editContact = () => {
    edit.classList.toggle("active");
    overlayEdit.classList.toggle("hidden");
};
function caputatID(button) {
    var contactElement = button.closest("tr");
    var contactId = contactElement.getAttribute("id");
    console.log("ID do contato:", contactId);
    return contactId;
}

editBtn.forEach(function (botao) {
    botao.addEventListener("click", function (event) {
        const botaoClicado = event.target;
        caputatID(botaoClicado);
        editContact();
    });
});

overlayEdit.addEventListener("click", function () {
    editContact();
});

cancelarEdit.addEventListener("click", function () {
    editContact();
});

document.addEventListener("keydown", (event) => {
    if (event.keyCode === 27) {
        overlayEdit.classList.add("hidden");
        edit.classList.remove("active");
    }
});
