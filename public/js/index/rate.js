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
        this.checkedIDs = [];
    }
    /**
     * Adds event listeners to each rate element.
     *
     * @function
     */
    addEventListeners(){
        this.initialize();
        for (const rate of this.rate) {
            for (const child of rate.children) {
                child.addEventListener('click', this.checked.bind(this));
                child.addEventListener('mouseover', this.pseudoChecked.bind(this));
                child.addEventListener('mouseout', this.pseudoUnchecked.bind(this));
                child.addEventListener('mouseout', this.initialize.bind(this));
            }
        }
    }
    /**
     * Initializes the rate elements by setting their attributes and styles
     * based on the stored rating values and previously checked IDs.
     *
     * @function
     */
    initialize() {
        for (const rate of this.rate) {
            const id = rate.getAttribute('data-rate-id');
            const rating = Math.round(document.querySelector('[data-rate-value-id="'+id+'"]').innerText);
            const savedID = localStorage.getItem('id' + id);
            Array.from(rate.children).forEach((child, index) => {
                // Add 'rate-checked' class to the child if its index is less than the current rating and the ID has not been checked yet.
                if (index < rating && this.checkedIDs.indexOf(id) === -1) {
                    child.classList.add('rate-checked');
                }
                if (savedID) {
                    // Disable the child and set it as checked if appropriate
                    child.setAttribute('disabled', 'disabled');
                    if (index < rating && this.checkedIDs.indexOf(id) === -1) {
                        child.checked = true;
                        child.setAttribute('checked', 'checked');
                    }
                }
            });
        }
    }
    /**
     * Checks the rating elements and updates the state of the rating elements.
     * Disables the rating elements and saves the checked IDs.
     * @function
     * @param {Event} event - The event object.
     */
    checked(event) {
        const parent = event.target.parentElement;
        this.id = parent.getAttribute('data-rate-id');
        this.checkedIDs.push(this.id);
        this.rating = Number(event.target.value);
        Array.from(parent.children).forEach((child, index) => {
            // Check the rating element if its index is less than the current rating
            if (index < this.rating){
                child.checked = true;
                child.setAttribute('checked', 'checked');
            }else {
                child.checked = false;
                child.removeAttribute('checked');
            }
            // Disable the rating element
            child.setAttribute('disabled', 'disabled');
        });
        this.save();
        this.send();
    }
    /**
     * Saves the current rating ID to local storage.
     * The ID is stored with a key formatted as 'id{this.id}'.
     * This function is used to persist the ID between sessions.
     *
     * @function
     */
    save(){
        localStorage.setItem('id'+this.id, this.id);
    }
    /**
     * Temporarily highlights the rating elements up to the hovered rating value.
     * This function is triggered on mouseover event.
     *
     * @function
     * @param {Event} event - The event object from the mouseover event.
     */
    pseudoChecked(event) {
        // Reset any previous temporary highlight
        this.pseudoUnchecked(event);
        const parent = event.target.parentElement;
        const rating = Number(event.target.value);
        // Add 'rate-checked' class to all rating elements up to the hovered value
        Array.from(parent.children).slice(0, rating).forEach(child => {
            if (this.checkedIDs.indexOf(parent.getAttribute('data-rate-id')) === -1) {
                child.classList.add('rate-checked');
            }
        });
    }
    /**
     * Resets the temporary highlight effect from pseudoChecked()
     * This function is triggered on mouseout event.
     * @function
     * @param {Event} event - The event object from the mouseout event.
     */
    pseudoUnchecked(event) {
        const parent = event.target.parentElement;
        // Remove 'rate-checked' class from all rating elements
        Array.from(parent.children).forEach(child => {
            child.classList.remove('rate-checked');
        });
    }
    /**
     * Creates a FormData object with the rating and ID.
     * This is used in the send() function to send the rating data to the server.
     *
     * @function
     * @returns {FormData} - The FormData object with 'rating' and 'id' as keys.
     */
    createData() {
        let data = new FormData();
        data.append('rating', this.rating);
        data.append('id', this.id);
        return data;
    }
    /**
     * Retrieves the CSRF token from the meta tag in the document.
     *
     * @function
     * @returns {string} - The CSRF token as a string.
     */
    getCSRF(){
        return document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    }
    /**
     * Sends the rating data to the server using the Fetch API.
     * This function is used to send the rating data to the server to update the rating.
     * The function will send a POST request with the rating data as a FormData object.
     * The function will also handle the response from the server and update the rating elements accordingly.
     * @function
     * @returns {Promise<void>} - The promise resolves when the response from the server is handled.
     */
    send(){
        const options = {
            method: 'POST',
            body: this.createData(),
            headers: {
                'X-CSRF-TOKEN': this.getCSRF()
            }
        };
        fetch('/rate', options)
            .then(response => response.json())
            .then(json => this.handleAnswer(json));
    }
    /**
     * Updates the displayed rating values and rating counts for each bookmaker.
     * This function processes the response data from the server after a rating is submitted.
     *
     * @function
     * @param {Array} answer - An array of objects containing the updated rating information.
     * Each object should have 'bookmaker_id', 'rating', and 'rating_count' properties.
     * The function updates the text content of elements with corresponding data attributes
     * to reflect the new rating and count values for each bookmaker.
     */
    handleAnswer(answer) {
        Array.from(answer).forEach((object, index) => {
            document.querySelector('[data-rate-value-id="'+object.bookmaker_id+'"]').innerText = object.rating;
            document.querySelector('[data-rate-count-id="'+object.bookmaker_id+'"]').innerText = object.rating_count;
        });
    }

}
new Rate().addEventListeners();
