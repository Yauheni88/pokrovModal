const modalCloseButtons = document.querySelectorAll('[data-modal-close]');
const modalFade = document.getElementById('modal');
const hero = document.getElementById('hero');

modalCloseButtons.forEach(function(item) {
    item.addEventListener('click', function() {
        modalFade.classList.add('hidden');   
        hero.classList.add('zindex');
        // body.classList.remove('lock');
        // document.documentElement.classList.remove('lock');
        })
    })
    modalFade.querySelector('.modal__window').addEventListener('click', function(e) {
        e.stopPropagation();
    })
