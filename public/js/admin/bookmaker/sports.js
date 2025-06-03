'use strict';
class Sports {
    constructor() {
        this.sports = document.querySelectorAll('input[name="sports[]"]');
        this.selectedSports = document.querySelectorAll('.selected-sport');
    }
    /**
     * Adds event listeners to each sport checkbox.
     * When the sport checkbox changes, the toggle() method is called.
     * @function
     */
    addEventListeners() {
        this.sports.forEach(sport => {
            sport.addEventListener('change', this.toggle.bind(this));
        });
    }
    /**
     * Toggles the visibility of the sport in the list when the checkbox is clicked.
     * @param {Event} event - The event triggered by the checkbox.
     * @function
     */
    toggle(event) {
        const id = event.target.getAttribute('id').replace('sport', '');
        this.selectedSports.forEach(img => {
            if (img.getAttribute('data-sport-id') === id) {
                img.classList.toggle('hidden');
            }
        });
    }
}
new Sports().addEventListeners();

