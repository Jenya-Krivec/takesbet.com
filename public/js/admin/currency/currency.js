'use strict';
class Currency {
    constructor() {
        this.addCurrencyBtn = document.querySelector('.add-currency');
    }

    addEventListeners(){
        this.addCurrencyBtn.addEventListener('click', this.add.bind(this));
    }
    add() {
        const id = Number(document.querySelectorAll('div[data-id]')[document.querySelectorAll('div[data-id]').length - 1].getAttribute('data-id'));
        const row = '' +
            '<div data-id="'+(id+1)+'" class="w-3/4 flex justify-between border-gray-200 border-2 rounded-xl p-1 m-1">\n' +
            '   <input type="text" name="'+(id+1)+'-key" value="" class="text-gray-500 w-24" placeholder="Abbreviation">\n' +
            '   <input type="text" name="'+(id+1)+'-name-en" value="" class="text-gray-500 w-48" placeholder="Currency name in English">\n' +
            '   <input type="text" name="'+(id+1)+'-name-es" value="" class="text-gray-500 w-48" placeholder="Currency name in Spanish">\n' +
            '   <input type="text" name="'+(id+1)+'-name-fr" value="" class="text-gray-500 w-48" placeholder="Currency name in French">\n' +
            '   <input type="text" name="'+(id+1)+'-name-pt" value="" class="text-gray-500 w-48" placeholder="Currency name in Portuguese">\n' +
            '</div>';
        const element = (id === 0) ? document.querySelector('.form > input[name="_token"]') : document.querySelector('div[data-id="' + id + '"]');
        element.insertAdjacentHTML('afterend', row);
    }
}
new Currency().addEventListeners();
