"use strict";
class Link {
    constructor() {
        this.btns = document.querySelectorAll('[data-url]');
    }
    addEventListeners() {
        this.btns.forEach(btn => {
            btn.addEventListener('click', this.follow.bind(this));
        });
    }
    follow(event) {
        window.location.href = event.target.getAttribute('data-url');
    }
}
new Link().addEventListeners();
