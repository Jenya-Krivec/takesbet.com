'use strict';
class PromoCode {
    constructor() {
        this.parent = document.querySelector('.curl');
        this.label = this.parent.children[0];
        this.falsePromoCode = this.parent.children[1];
        this.promoCode = this.parent.children[2];
    }
    addEventListeners() {
        this.label.addEventListener('click', this.show.bind(this));
    }
    show() {
        this.label.classList.add('hidden');
        this.falsePromoCode.classList.add('hidden');
        this.promoCode.classList.remove('hidden');
    }
}
new PromoCode().addEventListeners();
