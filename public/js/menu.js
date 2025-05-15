'use strict';
class Menu {
    /**
     * Constructor for the Menu class.
     * Initializes the menu and menu button elements.
     */
    constructor() {
        this.menu = document.querySelector('#mobile-menu');
        this.menuButton = document.querySelector('#mobile-menu-button');
    }
    /**
     * Add event listeners to the menu button.
     * @function
     */
    addEventListeners() {
        /**
         * Toggle the menu on and off.
         * @function
         */
        this.menuButton.addEventListener('click', this.toggle.bind(this));
    }
    /**
     * Toggle the menu's visibility by adjusting its CSS classes.
     * @function
     */
    toggle() {
        // Toggle the class to make the menu visible
        this.menu.classList.toggle('left-0');
        // Toggle the class to hide the menu
        this.menu.classList.toggle('-left-60');
    }
}
new Menu().addEventListeners();
