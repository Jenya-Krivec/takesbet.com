'use strict';
class Logo {
    constructor() {
        this.logo = document.querySelector('input[name="logo"]');
        this.label = document.querySelector('label[for="logo"]');
        this.logoPreview = document.querySelector('#logo-preview');
        this.types=[
            'image/svg+xml',
        ];
    }
    /**
     * Adds event listeners to the logo input and the logo container.
     * When the logo input changes, the logo container's image is updated.
     * When the logo container is clicked, the logo input is opened.
     */
    addEventListeners() {
        this.logo.addEventListener('change', this.toggle.bind(this));
        this.logoPreview.addEventListener('click', this.openUploadForm.bind(this));
    }
    /**
     * Simulates a click event on the logo input, which opens the file upload form.
     */
    openUploadForm() {
        this.logo.click();

    }
    /**
     * Handles the logo input change event.
     * If no file is chosen, it does nothing.
     * If the file is invalid (size > 1 MB or invalid type), it alerts the user and resets the logo input.
     * If the file is valid, it updates the logo preview and hides the file upload form.
     */
    toggle() {
        if (!this.logo.files[0]) {
            return;
        }
        if (this.checkSize() || this.checkType()) {
            alert('Please choose a file smaller than 1 MB and a file with a supported type (svg).');
            this.logo.value = '';
        }else {
            this.logoPreview.src = URL.createObjectURL(this.logo.files[0]);
            this.logoPreview.classList.remove('hidden');
            this.label.classList.add('hidden');
        }
    }
    /**
     * Checks if the chosen file is larger than 1 MB.
     * @return {boolean} true if the file is larger than 1 MB, false otherwise.
     */
    checkSize(){
        return this.logo.files[0].size >= 1000000;
    }
    /**
     * Checks if the chosen file is of an unsupported type.
     * @return {boolean} true if the file is of an unsupported type, false otherwise.
     */
    checkType(){
        return !this.types.includes(this.logo.files[0].type);
    }
}
new Logo().addEventListeners();
