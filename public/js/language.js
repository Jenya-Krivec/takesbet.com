'use strict';
class Language{
    /**
     * Class constructor.
     * @constructor
     */
    constructor(){
        this.language = document.querySelector('#language');
        this.dropdownMenu = document.querySelector('#language ~ .dropdown-menu');
        this.languageArrow = document.querySelector('.language-arrow');
    }
    /**
     * Adds event listeners to the language dropdown button.
     */
    addEventListeners(){
        /**
         * Shows the dropdown menu.
         */
        this.language.addEventListener('click', this.toggle.bind(this));
    }
    /**
     * Toggles the visibility of the dropdown menu.
     */
    toggle(){
        this.dropdownMenu.classList.toggle('hidden');
        this.languageArrow.classList.toggle('rotate-180');
    }
}
new Language().addEventListeners();
