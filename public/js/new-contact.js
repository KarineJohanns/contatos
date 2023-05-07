const btn = document.querySelector('#btn-add');
const section = document.querySelector('.new-contact-container');
const overlay = document.querySelector('#overlay');
const cancelar = document.querySelector('#cancelar');

const addContact = () => {
    section.classList.toggle('active');
    overlay.classList.toggle('hidden');
}

btn.addEventListener('click', function () {
    addContact();
});

overlay.addEventListener('click', function () {
    addContact();
})

cancelar.addEventListener('click', function () {
    addContact();
})

document.addEventListener('keydown', event => {
    if (event.keyCode === 27) {
        overlay.classList.add('hidden');
        section.classList.remove('active');
    }
})
