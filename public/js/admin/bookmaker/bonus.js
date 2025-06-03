'use strict';
class Bonus {

    constructor() {
        this.bonusAvailable = document.querySelector('input[name="bonus_available"]');
        this.editBonus = document.querySelector('#edit-bonus');
    }
    /**
     * Add event listeners to the bonus available checkbox.
     *
     * @function
     */
    addEventListeners() {
        this.bonusAvailable.addEventListener('change', this.toggle.bind(this));
    }
    /**
     * Toggle the visibility of the edit bonus link based on the value of the
     * bonus available checkbox.
     *
     * @function
     */
    toggle() {
        if (this.bonusAvailable.checked) {
            this.editBonus?.classList.remove('hidden');
        } else {
            this.editBonus?.classList.add('hidden');
        }
    }
}
new Bonus().addEventListeners();
