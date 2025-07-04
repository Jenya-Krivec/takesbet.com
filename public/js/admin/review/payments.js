'use strict';
class Payments {
    constructor() {
        this.payments = payments;
    }
    add(id) {
        let row = '' +
            '<div class="relative border-b-2 border-gray-200">\n' +
            '    <div class="flex items-center text-white bg-blue-700 rounded-full hover:bg-blue-600 cursor-pointer transition-all duration-500 absolute -bottom-3 -left-8 hidden add-after" onclick="new AddSection().addComponent({target: this})" data-id="'+(id+1)+'" title="Add component after Payments">\n' +
            '        <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24">\n' +
            '            <path d="M11 5a1 1 0 1 1 2 0v6h6a1 1 0 1 1 0 2h-6v6a1 1 0 1 1-2 0v-6H5a1 1 0 1 1 0-2h6V5z"/>\n' +
            '            <path d="M12 18l-4-4h8l-4 4z"/>\n' +
            '        </svg>\n' +
            '    </div>\n' +
            '    <div data-name="'+(id+1)+'-en" class="list-disc pl-5 my-4">\n' +
            '        <input hidden="hidden" name="'+(id+1)+'-list-en" value="1">\n'+
            '        <ol class="list-disc pl-5 my-4">\n';
        for(let i = 0; i < this.payments.length; i++) {
            row += '    <li class="text-base text-gray-700">'+this.payments[i]+'</li>\n';
        }
        row += '    </ol>\n' +
            '    </div>\n' +
            '    <div class="absolute bottom-0 -right-7 text-red-500 bg-red-200 w-5 h-5 rounded text-xs leading-5 cursor-pointer text-center delete" onClick="new Delete().deleteTable({target: this})" title="Delete Payments">X</div>\n' +
            '</div>';
        const element = (id === 0) ? document.querySelector('.form > input[name="_token"]') : document.querySelector('[data-name="' + id + '-en"]').parentElement;
        element.insertAdjacentHTML('afterend', row);
    }
}
