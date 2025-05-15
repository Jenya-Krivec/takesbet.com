'use strict';
class GoUp{
    constructor() {
        this.goUpButton = document.getElementById('go-up');
    }
    addEventListeners() {
        window.addEventListener('scroll', this.showButton.bind(this));
        this.goUpButton.addEventListener('click', this.scrollToTop.bind(this));
    }
    showButton() {
        if (window.scrollY > 200) {
            this.goUpButton.classList.remove('hidden');
        } else {
            this.goUpButton.classList.add('hidden');
        }
    }
    scrollToTop() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }
}
new GoUp().addEventListeners();
