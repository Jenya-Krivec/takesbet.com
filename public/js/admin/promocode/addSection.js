'use strict';
class AddSection {
    constructor(){
        this.addSectionBtn = document.querySelector('#add-section-btn');
        this.closeaddSectionBtn = document.querySelector('#close-add-section-btn');
        this.addSection = document.querySelector('#add-section');
        this.addAfterBtn = document.querySelectorAll('.add-after');
    }
    addEventListeners(){
        this.addSectionBtn.addEventListener('click', this.display.bind(this));
        this.closeaddSectionBtn.addEventListener('click', this.hide.bind(this));
        this.addSectionBtn.addEventListener('click', () => {
            this.addSectionBtn.classList.toggle('hidden');
        });
        for (let key = 2; key < this.addSection.children.length; key++){
            this.addSection.children[key].addEventListener('click', this.displayaddAfterBtn.bind(this));
            this.addSection.children[key].addEventListener('click', this.removeActiveClass.bind(this));
            this.addSection.children[key].addEventListener('click', this.addActiveClass.bind(this));
        }
        for (let key = 0; key < this.addAfterBtn.length; key++){
            this.addAfterBtn[key].addEventListener('click', this.addComponent.bind(this));
        }
    }
    display(){
        this.addSection.classList.remove('-left-52');
        this.addSection.classList.add('left-1');
    }
    hide(){
        this.addSection.classList.remove('left-1');
        this.addSection.classList.add('-left-52');
        this.hideaddAfterBtn();
        setTimeout(() => {
            this.addSectionBtn.classList.remove('hidden');
        }, 500);
        this.removeActiveClass();
    }
    displayaddAfterBtn(){
        const addAfterBtn = document.querySelectorAll('.add-after');
        for (let key = 0; key < addAfterBtn.length; key++){
            addAfterBtn[key].classList.remove('hidden');
        }
    }
    hideaddAfterBtn(){
        const addAfterBtn = document.querySelectorAll('.add-after');
        for (let key = 0; key < addAfterBtn.length; key++){
            addAfterBtn[key].classList.add('hidden');
        }
    }
    addActiveClass(event){
        const element = event.target.tagName === 'BUTTON' ? event.target : event.target.parentElement === 'BUTTON' ? event.target.parentElement : event.target.parentElement.parentElement;
        setTimeout(() => element.classList.add('active'), 100);
    }
    removeActiveClass(){
        for (let key = 1; key < this.addSection.children.length; key++){
            this.addSection.children[key].classList.remove('active');
        }
    }
    changeID(id){
        const dataIDs = document.querySelectorAll(`[data-id]`);
        const dataIDsArray = Array.from(dataIDs);
        const dataIDsFiltered = dataIDsArray.filter(el => Number(el.getAttribute('data-id')) > id);
        for (let key = 0; key < dataIDsFiltered.length; key++){
            let newID = Number(dataIDsFiltered[key].getAttribute('data-id'));
            dataIDsFiltered[key].setAttribute('data-id', (newID+1).toString());
        }

        const dataNameIDs = document.querySelectorAll(`[data-name]`);
        const dataNameIDsArray = Array.from(dataNameIDs);
        const dataNameIDsFiltered = dataNameIDsArray.filter(el => Number(el.getAttribute('data-name').split('-')[0]) > id);
        for (let key = 0; key < dataNameIDsFiltered.length; key++){
            let newDataName = (Number(dataNameIDsFiltered[key].getAttribute('data-name').split('-')[0]) + 1) + '-' + dataNameIDsFiltered[key].getAttribute('data-name').split('-')[1];
            dataNameIDsFiltered[key].setAttribute('data-name', newDataName);
        }

        const names = document.querySelectorAll(`[name]`);
        const namesArray = Array.from(names);
        const namesFiltered = namesArray.filter(el => Number(el.getAttribute('name').split('-')[0]) > id);
        for (let key = 0; key < namesFiltered.length; key++){
            let newName = '';
            let nameArr = namesFiltered[key].getAttribute('name').split('-');
            for (let i = 0; i < nameArr.length; i++){
                if (i === 0){
                    newName += (Number(nameArr[i]) + 1).toString();
                }else {
                    newName += '-' + nameArr[i];
                }
            }
            namesFiltered[key].setAttribute('name', newName);
        }
    }
    addComponent(event) {
        const component = document.querySelector('.active').value;
        const id = Number(event.target.closest('[data-id]').getAttribute('data-id'));
        this.changeID(id);
        switch (component) {
            case 'Caption':
                new Caption().add(id);
                break;
            case 'Subtitle':
                new Subtitle().add(id);
                break;
            case 'Paragraph':
                new Paragraph().add(id);
                break;
            case 'Picture':
                new Picture().add(id);
                break;
            case 'List':
                new List().add(id);
                break;
            case 'ProsCons':
                new ProsCons().add(id);
                break;
            case 'Sports':
                new Sports().add(id);
                break;
            case 'Payments':
                new Payments().add(id);
                break;
            case 'Support':
                new Support().add(id);
                break;
            case 'Comparison':
                new Comparison().add(id);
                break;
        }
        this.hide();
    }
}
new AddSection().addEventListeners();
