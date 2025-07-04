'use strict';
class Textarea {
    constructor() {
        this.componentP = document.getElementsByClassName('componentP');
    }
    addEventListeners() {
        for (let key = 0; key < this.componentP.length; key++){
            this.resize({target: this.componentP[key]});
            this.componentP[key].addEventListener('input', this.resize.bind(this));
        }
    }
    resize(event){
        let element = event.target;
        element.style.height = "auto";
        let height=Math.max(element.scrollHeight, element.offsetHeight) + 2;
        element.style.height = height+"px";
    }
}
new Textarea().addEventListeners();
