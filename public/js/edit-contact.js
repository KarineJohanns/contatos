const editBtn = document.querySelector('#btn-edit');
const edit = document.querySelector('.edit-contact-container');
const overlayEdit = document.querySelector('#overlayEdit');
const cancelarEdit = document.querySelector('#cancelarEdit');


const editContact = () => {
    edit.classList.toggle('active');
    overlayEdit.classList.toggle('hidden');
}

editBtn.addEventListener('click', function () {
    editContact();
})

overlayEdit.addEventListener('click', function () {
    editContact()
})

cancelarEdit.addEventListener('click', function () {
    editContact()
})

document.addEventListener('keydown', event => {
    if (event.keyCode === 27) {
        overlayEdit.classList.add('hidden');
        edit.classList.remove('active');
    }
})
