'use strict';
class Information {
    /**
     * Constructor for the Information class.
     * Initializes the menu and Information button elements.
     */
    constructor() {
        this.information = document.querySelector('#information-menu');
        this.informationButton = document.querySelector('#information');
        this.overlay = document.querySelector('#overlay');
    }
    /**
     * Add event listeners to the Information button.
     * @function
     */
    addEventListeners() {
        /**
         * Toggle the Information on and off.
         * @function
         */
        this.informationButton.addEventListener('click', this.toggle.bind(this));
        this.overlay.addEventListener('click', this.toggle.bind(this));
    }
    /**
     * Toggle the Information's visibility by adjusting its CSS classes.
     * @function
     */
    toggle() {
        // Toggle the class to make the Information visible
        this.information.classList.toggle('right-0');
        // Toggle the class to hide the Information
        this.information.classList.toggle('-right-1/2');
        this.overlay.classList.toggle('hidden');
    }
}
new Information().addEventListeners();
