'use strict';
class Slider {
    constructor() {
        this.sliders = document.querySelectorAll('.slider');
        this.slideWidth = 25; // width
        this.visibleSlides = 4;
    }
    /**
     * Starts the slider
     */
    run(){
        this.sliders.forEach(slider => {
            setInterval(() => this.slide(slider), 3000);
        });
    }
    /**
     * Slide the slider
     * @param {HTMLElement} slider - The slider element
     */
    slide(slider){
        // Set the slider to slide
        slider.style.transition = 'transform 0.6s ease-in-out';
        slider.style.transform = 'translateX(-'+this.slideWidth+'%)';
        // Set the slider to start at the beginning after 600ms
        setTimeout(this.setStart.bind(this, slider), 600);
    }

    /**
     * Resets the slider to its initial state
     * @param {HTMLElement} slider - The slider element
     */
    setStart(slider){
        // Move the first slide to the end
        slider.appendChild(slider.firstElementChild);
        slider.style.transition = 'none';
        slider.style.transform = 'translateX(0)';
    }
}
new Slider().run();
