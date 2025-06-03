'use strict';
class Currencies {
    constructor() {
        this.currencies = document.querySelectorAll('input[name="currencies[]"]');
        this.selectedCurrencies = document.querySelectorAll('.selected-currency');
    }
    /**
     * Add event listeners to each currency checkbox.
     * When the currency checkbox changes, the toggle() method is called.
     * @function
     */
    addEventListeners() {
        this.currencies.forEach(currency => {
            currency.addEventListener('change', this.toggle.bind(this));
        });

    }
    /**
     * Toggles the visibility of the currency in the list when the checkbox is clicked.
     * @param {Event} event - The event triggered by the checkbox.
     * @function
     */
    toggle(event) {
        const id = event.target.getAttribute('id').replace('currency', '');
        this.selectedCurrencies.forEach(p => {
            if (p.getAttribute('data-currency-id') === id) {
                p.classList.toggle('hidden');
            }
        });
    }
}
new Currencies().addEventListeners();
