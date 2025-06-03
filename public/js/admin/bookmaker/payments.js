'use strict';
class Payments {
    constructor() {
        this.payments = document.querySelectorAll('input[name="payments[]"]');
        this.selectedPayments = document.querySelectorAll('.selected-payment');
    }
    /**
     * Add event listeners to each payment checkbox.
     * When the payment checkbox changes, the toggle() method is called.
     *
     * @function
     */
    addEventListeners() {
        this.payments.forEach(payment => {
            payment.addEventListener('change', this.toggle.bind(this));
        });
    }
    /**
     * Toggles the visibility of the payment in the list when the checkbox is clicked.
     * @param {Event} event - The event triggered by the checkbox.
     * @function
     */
    toggle(event) {
        const id = event.target.getAttribute('id').replace('payment', '');
        this.selectedPayments.forEach(img => {
            if (img.getAttribute('data-payment-id') === id) {
                img.classList.toggle('hidden');
            }
        });
    }
}
new Payments().addEventListeners();
