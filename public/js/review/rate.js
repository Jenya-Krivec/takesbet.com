'use strict';
class Rate{
    /**
     * Create a new Rate object.
     *
     * @constructor
     */
    constructor(){
        this.rate = document.getElementsByClassName('rate');
        this.id = 0;
        this.rating = 0;
    }
    /**
     * Initializes the rate elements by setting their attributes and styles
     * based on the stored rating values and previously checked IDs.
     *
     * @function
     */
    initialize() {
        for (const rate of this.rate) {
            this.id = rate.getAttribute('data-rate-id');
            this.rating = Math.round(document.querySelector('[data-rate-value-id="'+this.id+'"]').innerText);
            Array.from(rate.children).forEach((child, index) => {
                // Add 'rate-checked' class to the child if its index is less than the current rating and the ID has not been checked yet.
                if (index < this.rating) {
                    child.classList.add('rate-checked');
                    child.checked = true;
                    child.setAttribute('checked', 'checked');
                }
            });
        }
    }
}
new Rate().initialize();
