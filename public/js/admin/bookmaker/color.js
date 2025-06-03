'use strict';
class Color {
    constructor() {
        this.color = document.querySelector('input[name="logo_color"]');
        this.label = document.querySelector('label[for="logo_color"]');
        this.logoContainer = document.querySelector('#logo-container');
        this.triangleRight = document.querySelector('.triangle-right');
    }
    /**
     * Adds event listeners to the color input and the logo container.
     * When the color input changes, the logo container's background color is updated.
     * When the logo container is clicked, the color input is opened.
     */
    addEventListeners() {
        this.color.addEventListener('change', this.toggle.bind(this));
        this.logoContainer.addEventListener('click', this.openPalette.bind(this));
    }
    /**
     * Simulates a click event on the color input, which opens the color palette.
     * Called when the logo container is clicked.
     */
    openPalette() {
        this.color.click();
    }
    /**
     * Called when the color input changes. Updates the logo container's background
     * color to the new color and the triangle's border-left color to the new color.
     * Also hides the color label.
     */
    toggle() {
        this.logoContainer.style.backgroundColor = this.color.value;
        this.triangleRight.style.borderLeftColor = this.color.value;
        this.label.classList.add('hidden');
    }
}
new Color().addEventListeners();



