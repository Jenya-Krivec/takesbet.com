'use strict';
class List {
    constructor() {
        this.addRowBtn = document.querySelectorAll('.add-row-list');
    }
    addEventListeners() {
        this.addRowBtn.forEach(btn => {
            btn.addEventListener('click', this.addRow.bind(this));
        });
    }
    addRow(event) {
        const id = event.target.getAttribute('data-id');
        ['en', 'es', 'fr', 'pt'].forEach(lang => {
            const table = document.querySelector(`[data-name="${id}-${lang}"]`);
            this.createRow(table, id, lang);
        });
    }
    createRow(table, id, lang) {
        const k = table.children[0].children.length - 1;
        const i = table.children[0].querySelectorAll('input').length;
        const row = '<li class="text-base text-gray-700">\n' +
            '                    <input type="text" name="'+id+'-list_v2-'+lang+'-'+i+'" class="text-base text-gray-700 w-full" value="">\n' +
            '                </li>'
        table.children[0].children[k].insertAdjacentHTML('afterend', row);
    }
    add(id) {
        const row = '' +
            '<div class="relative border-b-2 border-gray-200">\n' +
            '    <div class="flex items-center text-white bg-blue-700 rounded-full hover:bg-blue-600 cursor-pointer transition-all duration-500 absolute -bottom-3 -left-8 hidden add-after" onclick="new AddSection().addComponent({target: this})" data-id="'+(id+1)+'" title="Add component after List">\n' +
            '        <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24">\n' +
            '            <path d="M11 5a1 1 0 1 1 2 0v6h6a1 1 0 1 1 0 2h-6v6a1 1 0 1 1-2 0v-6H5a1 1 0 1 1 0-2h6V5z"/>\n' +
            '            <path d="M12 18l-4-4h8l-4 4z"/>\n' +
            '        </svg>\n' +
            '    </div>\n' +
            '    <div data-name="'+(id+1)+'-en" class="list-disc pl-5 my-4">\n' +
            '        <ol class="list-disc pl-5 my-4">\n' +
            '                <li class="text-base text-gray-700">\n' +
            '                    <input type="text" name="'+(id+1)+'-list_v2-en-0" class="text-base text-gray-700 w-full" value="">\n' +
            '                </li>\n' +
            '        </ol>\n' +
            '    </div>\n' +
            '    <div data-name="'+(id+1)+'-es" class="list-disc pl-5 my-4 hidden">\n' +
            '        <ol class="list-disc pl-5 my-4">\n' +
            '                <li class="text-base text-gray-700">\n' +
            '                    <input type="text" name="'+(id+1)+'-list_v2-es-0" class="text-base text-gray-700 w-full" value="">\n' +
            '                </li>\n' +
            '        </ol>\n' +
            '    </div>\n' +
            '    <div data-name="'+(id+1)+'-fr" class="list-disc pl-5 my-4 hidden">\n' +
            '        <ol class="list-disc pl-5 my-4">\n' +
            '                <li class="text-base text-gray-700">\n' +
            '                    <input type="text" name="'+(id+1)+'-list_v2-fr-0" class="text-base text-gray-700 w-full" value="">\n' +
            '                </li>\n' +
            '        </ol>\n' +
            '    </div>\n' +
            '    <div data-name="'+(id+1)+'-pt" class="list-disc pl-5 my-4 hidden">\n' +
            '        <ol class="list-disc pl-5 my-4">\n' +
            '                <li class="text-base text-gray-700">\n' +
            '                    <input type="text" name="'+(id+1)+'-list_v2-pt-0" class="text-base text-gray-700 w-full" value="">\n' +
            '                </li>\n' +
            '        </ol>\n' +
            '    </div>\n' +
            '    <div class="flex items-center justify-center self-center text-white bg-blue-700 rounded-full hover:bg-blue-600 h-6 w-6 transition-all duration-500 mb-2 mx-auto cursor-pointer add-row-list" data-id="'+(id+1)+'" onclick="new List().addRow({target: this})" title="Add Row">+</div>\n' +
            '    <select class="absolute top-1 -right-11 border-2 border-blue-700 text-xs rounded language" onChange="new Language().toggle({target: this})" data-id="'+(id+1)+'" title="Change language for Caption">\n' +
            '        <option value="en" selected>En</option>\n' +
            '        <option value="es">Es</option>\n' +
            '        <option value="fr">Fr</option>\n' +
            '        <option value="pt">Pt</option>\n' +
            '    </select>\n' +
            '    <div class="absolute bottom-0 -right-7 text-red-500 bg-red-200 w-5 h-5 rounded text-xs leading-5 cursor-pointer text-center delete" onClick="new Delete().deleteTable({target: this})" title="Delete List">X</div>\n' +
            '</div>';
        const element = (id === 0) ? document.querySelector('.form > input[name="_token"]') : document.querySelector('[data-name="' + id + '-en"]').parentElement;
        element.insertAdjacentHTML('afterend', row);
    }
}
new List().addEventListeners();
