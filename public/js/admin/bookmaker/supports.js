'use strict';
class Supports {
    constructor() {
        this.supports = document.querySelectorAll('input[name="supports[]"]');
        this.selectedSupports = document.querySelectorAll('.selected-support');
    }
    /**
     * Adds event listeners to each support checkbox.
     * When a support checkbox changes, the toggle() method is called to update the visibility of the corresponding support.
     * @function
     */
    addEventListeners() {
        this.supports.forEach(support => {
            support.addEventListener('change', this.toggle.bind(this));
        });
    }
    /**
     * Toggles the visibility of the support element in the list when the checkbox is clicked.
     * @param {Event} event - The event triggered by the checkbox.
     * The function extracts the support ID from the checkbox's ID attribute
     * and toggles the 'hidden' class on the corresponding support element.
     */
    toggle(event) {
        const id = event.target.getAttribute('id').replace('support', '');
        this.selectedSupports.forEach(p => {
            if (p.getAttribute('data-support-id') === id) {
                p.classList.toggle('hidden');
            }
        });
    }
}
new Supports().addEventListeners();

