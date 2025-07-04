'use strict';
class Language {
    constructor(){
        this.language = document.querySelectorAll('.language');
    }
    addEventListeners(){
        this.language.forEach(language => {
            language.addEventListener('change', this.toggle.bind(this));
        });
    }
    toggle(event) {
        const id = event.target.getAttribute('data-id');
        const lang = event.target.value;
        this.hide(document.querySelector('[data-name="' + id + '-en"]'));
        this.hide(document.querySelector('[data-name="' + id + '-es"]'));
        this.hide(document.querySelector('[data-name="' + id + '-fr"]'));
        this.hide(document.querySelector('[data-name="' + id + '-pt"]'));
        const element = document.querySelector('[data-name="' + id + '-' + lang + '"]');
        element.classList.remove('hidden');
        if (element.tagName === 'TEXTAREA'){
            new Textarea().resize({target: element});
        }
    }
    hide(element){
        element.classList.add('hidden');
    }
}
new Language().addEventListeners();
