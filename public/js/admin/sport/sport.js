'use strict';
class Sport{
    constructor() {
        this.imgs = document.querySelectorAll('img[data-id]');
        this.addSportBtn = document.querySelector('.add-sport');
    }

    addEventListeners(){
        this.imgs.forEach(img => {
            img.addEventListener('click', this.changeImg.bind(this));
        });
        this.addSportBtn.addEventListener('click', this.add.bind(this));
    }
    changeImg(event){
        const img = event.target;
        const id = img.getAttribute('data-id');
        let input = document.querySelector('input[name="'+id+'-imgsport"]');
        input.click();
        input.addEventListener('change', () => {
            img.src = URL.createObjectURL(input.files[0]);
        });
    }
    add() {
        const id = Number(document.querySelectorAll('div[data-id]')[document.querySelectorAll('div[data-id]').length - 1].getAttribute('data-id'));
        const row = '' +
            '<div data-id="'+(id+1)+'" class="w-3/4 flex justify-between border-gray-200 border-2 rounded-xl p-1 m-1">\n' +
            '   <input name="'+(id+1)+'-imgsport" type="file" class="hidden sport-img" value="" accept="image/*">\n' +
            '   <img data-id="'+(id+1)+'" src="" onclick="new Sport().changeImg({target: this})" alt="Choose Image" title="Change Image" width="16" height="16" class="mr-1 flex-shrink-0 w-32 h-6 cursor-pointer object-contain">\n' +
            '   <input type="text" name="'+(id+1)+'-name-en" value="" class="text-gray-500 w-48 payment-name" placeholder="Sport name in English">\n' +
            '   <input type="text" name="'+(id+1)+'-name-es" value="" class="text-gray-500 w-48 payment-name" placeholder="Sport name in Spanish">\n' +
            '   <input type="text" name="'+(id+1)+'-name-fr" value="" class="text-gray-500 w-48 payment-name" placeholder="Sport name in French">\n' +
            '   <input type="text" name="'+(id+1)+'-name-pt" value="" class="text-gray-500 w-48 payment-name" placeholder="Sport name in Portuguese">\n' +
            '</div>';
        const element = (id === 0) ? document.querySelector('.form > input[name="_token"]') : document.querySelector('div[data-id="' + id + '"]');
        element.insertAdjacentHTML('afterend', row);
    }
}
new Sport().addEventListeners();
