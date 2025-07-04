'use strict';
class Paragraph {
    constructor() {
    }
    add(id) {
        const row = '' +
            '<div class="relative text-justify my-4">\n' +
            '    <div class="flex items-center text-white bg-blue-700 rounded-full hover:bg-blue-600 cursor-pointer transition-all duration-500 absolute bottom-3 -left-8 add-after hidden" onclick="new AddSection().addComponent({target: this})" data-id="'+(id+1)+'" title="Add component after Text">\n' +
            '        <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24">\n' +
            '            <path d="M11 5a1 1 0 1 1 2 0v6h6a1 1 0 1 1 0 2h-6v6a1 1 0 1 1-2 0v-6H5a1 1 0 1 1 0-2h6V5z"></path>\n' +
            '            <path d="M12 18l-4-4h8l-4 4z"></path>\n' +
            '        </svg>\n' +
            '    </div>\n' +
            '    <textarea name="'+(id+1)+'-p-en" data-name="'+(id+1)+'-en" oninput="new Textarea().resize({target: this})" class="text-base text-gray-700 text-justify indent-10 mb-4 w-full border-b-2 border-gray-200 componentP"></textarea>\n' +
            '    <textarea name="'+(id+1)+'-p-es" data-name="'+(id+1)+'-es" oninput="new Textarea().resize({target: this})" class="text-base text-gray-700 text-justify indent-10 mb-4 w-full border-b-2 border-gray-200 componentP hidden"></textarea>\n' +
            '    <textarea name="'+(id+1)+'-p-fr" data-name="'+(id+1)+'-fr" oninput="new Textarea().resize({target: this})" class="text-base text-gray-700 text-justify indent-10 mb-4 w-full border-b-2 border-gray-200 componentP hidden"></textarea>\n' +
            '    <textarea name="'+(id+1)+'-p-pt" data-name="'+(id+1)+'-pt" oninput="new Textarea().resize({target: this})" class="text-base text-gray-700 text-justify indent-10 mb-4 w-full border-b-2 border-gray-200 componentP hidden"></textarea>\n' +
            '    <select class="absolute top-1 -right-11 border-2 border-blue-700 text-xs rounded language" data-id="'+(id+1)+'" onChange="new Language().toggle({target: this})" title="Change language for Text">\n' +
            '        <option value="en" selected="">En</option>\n' +
            '        <option value="es">Es</option>\n' +
            '        <option value="fr">Fr</option>\n' +
            '        <option value="pt">Pt</option>\n' +
            '    </select>\n' +
            '    <div class="absolute bottom-6 -right-7 text-red-500 bg-red-200 w-5 h-5 rounded text-xs leading-5 cursor-pointer text-center delete" onClick="new Delete().deleteTable({target: this})" title="Delete Text">X</div>\n' +
            '</div>';
        const element = (id === 0) ? document.querySelector('.form > input[name="_token"]') : document.querySelector('[data-name="' + id + '-en"]').parentElement;
        element.insertAdjacentHTML('afterend', row);
    }
}
