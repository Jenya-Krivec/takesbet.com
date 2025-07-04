'use strict';
class ProsCons {
    constructor() {
        this.addProsBtn = document.querySelectorAll('.add-pros');
        this.addCons = document.querySelectorAll('.add-cons');
    }
    addEventListeners() {
        this.addProsBtn.forEach((btn) => {
            btn.addEventListener('click', this.addRow.bind(this, 'pros'));
        });
        this.addCons.forEach((btn) => {
            btn.addEventListener('click', this.addRow.bind(this, 'cons'));
        });
    }
    addRow(column, event) {
        const child = column === 'pros' ? 0 : 1;
        const id = event.target.getAttribute('data-id');
        ['en', 'es', 'fr', 'pt'].forEach(lang => {
            const table = document.querySelector(`[data-name="${id}-${lang}"]`).children[child];
            this.createRow(table, column, id, lang);
        });
    }
    createRow(table, column, id, lang) {
        const i = table.children.length - 2;
        const classes = column === 'pros' ? 'text-green-700 bg-green-100' : 'text-red-700 bg-red-100';
        const child = column === 'pros' ? 0 : 1;
        const symbol =  column === 'pros' ? '✓' : 'X';
        const row = '<div class="flex-row flex justify-start items-center py-2 w-full">\n' +
            '                    <div class="flex-row flex justify-center items-center w-6 h-6 rounded-sm mr-2 flex-shrink-0 '+classes+'">'+symbol+'</div>\n' +
            '                    <input class="text-base text-gray-700 text-justify mb-1 mr-2 w-full border-b-2 border-gray-200" type="text" name="'+id+'-table_v1-'+lang+'-'+child+'-'+i+'" value="">\n' +
            '                </div>';
        table.children[i].insertAdjacentHTML('afterend', row);
    }
    add(id){
        const row = '' +
            '<div class="relative border-b-2 border-gray-200">\n' +
            '    <div class="flex items-center text-white bg-blue-700 rounded-full hover:bg-blue-600 cursor-pointer transition-all duration-500 absolute -bottom-3 -left-8 add-after hidden" onclick="new AddSection().addComponent({target: this})" data-id="'+(id+1)+'" title="Add component after Pros &amp; Cons">\n' +
            '        <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24">\n' +
            '            <path d="M11 5a1 1 0 1 1 2 0v6h6a1 1 0 1 1 0 2h-6v6a1 1 0 1 1-2 0v-6H5a1 1 0 1 1 0-2h6V5z"></path>\n' +
            '            <path d="M12 18l-4-4h8l-4 4z"></path>\n' +
            '        </svg>\n' +
            '    </div>\n' +
            '    <div data-name="'+(id+1)+'-en" class="flex flex-col sm:flex-row justify-center items-start ">\n' +
            '        <div class="w-full sm:w-1/2 flex-col justify-center items-start flex mr-2 pros">\n' +
            '            <div class="flex-row flex justify-start items-center py-2 w-full">\n' +
            '                <div class="flex-row flex justify-start items-center text-green-700 bg-green-100 w-full h-6 rounded-sm mr-2 px-2">Pros</div>\n' +
            '            </div>\n' +
            '            <div class="flex-row flex justify-start items-center py-2 w-full">\n' +
            '                <div class="flex-row flex justify-center items-center text-green-700 bg-green-100 w-6 h-6 rounded-sm mr-2 flex-shrink-0">✓</div>\n' +
            '                <input class="text-base text-gray-700 text-justify mb-1 mr-2 w-full border-b-2 border-gray-200" type="text" name="'+(id+1)+'-table_v1-en-0-0" value="">\n' +
            '            </div>\n' +
                        '<div class="flex items-center justify-center self-center text-white bg-blue-700 rounded-full hover:bg-blue-600 h-6 w-6 transition-all duration-500 mb-1 cursor-pointer add-pros" onclick="new ProsCons().addRow(`pros`, {target: this})" data-id="'+(id+1)+'" title="Add Pros">+</div>\n' +
            '        </div>\n' +
            '        <div class="w-full sm:w-1/2 flex-col justify-center items-start flex cons">\n' +
            '            <div class="flex-row flex justify-start items-center py-2 w-full">\n' +
            '                <div class="flex-row flex justify-start items-center text-red-700 bg-red-100 w-full h-6 rounded-sm mr-2 px-2">Cons</div>\n' +
            '            </div>\n' +
            '            <div class="flex-row flex justify-start items-center py-2 w-full">\n' +
            '                <div class="flex-row flex justify-center items-center text-red-700 bg-red-100 w-6 h-6 rounded-sm mr-2 flex-shrink-0">X</div>\n' +
            '                <input class="text-base text-gray-700 text-justify mb-1 mr-2 w-full border-b-2 border-gray-200" type="text" name="'+(id+1)+'-table_v1-en-1-0" value="">\n' +
            '            </div>\n' +
            '            <div class="flex items-center justify-center self-center text-white bg-blue-700 rounded-full hover:bg-blue-600 h-6 w-6 transition-all duration-500 mb-1 cursor-pointer add-cons" onclick="new ProsCons().addRow(`cons`, {target: this})" data-id="'+(id+1)+'" title="Add Cons">+</div>\n' +
            '        </div>\n' +
            '    </div>\n' +
            '    <div data-name="'+(id+1)+'-es" class="flex flex-col sm:flex-row justify-center items-start  hidden ">\n' +
            '        <div class="w-full sm:w-1/2 flex-col justify-center items-start flex mr-2 pros">\n' +
            '            <div class="flex-row flex justify-start items-center py-2 w-full">\n' +
            '                <div class="flex-row flex justify-start items-center text-green-700 bg-green-100 w-full h-6 rounded-sm mr-2 px-2">Pros</div>\n' +
            '            </div>\n' +
            '            <div class="flex-row flex justify-start items-center py-2 w-full">\n' +
            '                <div class="flex-row flex justify-center items-center text-green-700 bg-green-100 w-6 h-6 rounded-sm mr-2 flex-shrink-0">✓</div>\n' +
            '                <input class="text-base text-gray-700 text-justify mb-1 mr-2 w-full border-b-2 border-gray-200" type="text" name="'+(id+1)+'-table_v1-es-0-0" value="">\n' +
            '            </div>\n' +
            '            <div class="flex items-center justify-center self-center text-white bg-blue-700 rounded-full hover:bg-blue-600 h-6 w-6 transition-all duration-500 mb-1 cursor-pointer add-pros" onclick="new ProsCons().addRow(`pros`, {target: this})" data-id="'+(id+1)+'" title="Add Pros">+</div>\n' +
            '        </div>\n' +
            '        <div class="w-full sm:w-1/2 flex-col justify-center items-start flex cons">\n' +
            '            <div class="flex-row flex justify-start items-center py-2 w-full">\n' +
            '                <div class="flex-row flex justify-start items-center text-red-700 bg-red-100 w-full h-6 rounded-sm mr-2 px-2">Cons</div>\n' +
            '            </div>\n' +
            '            <div class="flex-row flex justify-start items-center py-2 w-full">\n' +
            '                <div class="flex-row flex justify-center items-center text-red-700 bg-red-100 w-6 h-6 rounded-sm mr-2 flex-shrink-0">X</div>\n' +
            '                <input class="text-base text-gray-700 text-justify mb-1 mr-2 w-full border-b-2 border-gray-200" type="text" name="'+(id+1)+'-table_v1-es-1-0" value="">\n' +
            '            </div>\n' +
            '            <div class="flex items-center justify-center self-center text-white bg-blue-700 rounded-full hover:bg-blue-600 h-6 w-6 transition-all duration-500 mb-1 cursor-pointer add-cons" onclick="new ProsCons().addRow(`cons`, {target: this})" data-id="'+(id+1)+'" title="Add Cons">+</div>\n' +
            '        </div>\n' +
            '    </div>\n' +
            '    <div data-name="'+(id+1)+'-fr" class="flex flex-col sm:flex-row justify-center items-start  hidden ">\n' +
            '        <div class="w-full sm:w-1/2 flex-col justify-center items-start flex mr-2 pros">\n' +
            '            <div class="flex-row flex justify-start items-center py-2 w-full">\n' +
            '                <div class="flex-row flex justify-start items-center text-green-700 bg-green-100 w-full h-6 rounded-sm mr-2 px-2">Pros</div>\n' +
            '            </div>\n' +
            '            <div class="flex-row flex justify-start items-center py-2 w-full">\n' +
            '                <div class="flex-row flex justify-center items-center text-green-700 bg-green-100 w-6 h-6 rounded-sm mr-2 flex-shrink-0">✓</div>\n' +
            '                <input class="text-base text-gray-700 text-justify mb-1 mr-2 w-full border-b-2 border-gray-200" type="text" name="'+(id+1)+'-table_v1-fr-0-0" value="">\n' +
            '            </div>\n' +
            '            <div class="flex items-center justify-center self-center text-white bg-blue-700 rounded-full hover:bg-blue-600 h-6 w-6 transition-all duration-500 mb-1 cursor-pointer add-pros" onclick="new ProsCons().addRow(`pros`, {target: this})" data-id="'+(id+1)+'" title="Add Pros">+</div>\n' +
            '        </div>\n' +
            '        <div class="w-full sm:w-1/2 flex-col justify-center items-start flex cons">\n' +
            '            <div class="flex-row flex justify-start items-center py-2 w-full">\n' +
            '                <div class="flex-row flex justify-start items-center text-red-700 bg-red-100 w-full h-6 rounded-sm mr-2 px-2">Cons</div>\n' +
            '            </div>\n' +
            '            <div class="flex-row flex justify-start items-center py-2 w-full">\n' +
            '                 <div class="flex-row flex justify-center items-center text-red-700 bg-red-100 w-6 h-6 rounded-sm mr-2 flex-shrink-0">X</div>\n' +
            '                 <input class="text-base text-gray-700 text-justify mb-1 mr-2 w-full border-b-2 border-gray-200" type="text" name="'+(id+1)+'-table_v1-fr-1-0" value="">\n' +
            '            </div>\n' +
            '            <div class="flex items-center justify-center self-center text-white bg-blue-700 rounded-full hover:bg-blue-600 h-6 w-6 transition-all duration-500 mb-1 cursor-pointer add-cons" onclick="new ProsCons().addRow(`cons`, {target: this})" data-id="'+(id+1)+'" title="Add Cons">+</div>\n' +
            '        </div>\n' +
            '    </div>\n' +
            '    <div data-name="'+(id+1)+'-pt" class="flex flex-col sm:flex-row justify-center items-start  hidden ">\n' +
            '        <div class="w-full sm:w-1/2 flex-col justify-center items-start flex mr-2 pros">\n' +
            '            <div class="flex-row flex justify-start items-center py-2 w-full">\n' +
            '                <div class="flex-row flex justify-start items-center text-green-700 bg-green-100 w-full h-6 rounded-sm mr-2 px-2">Pros</div>\n' +
            '            </div>\n' +
            '            <div class="flex-row flex justify-start items-center py-2 w-full">\n' +
            '                <div class="flex-row flex justify-center items-center text-green-700 bg-green-100 w-6 h-6 rounded-sm mr-2 flex-shrink-0">✓</div>\n' +
            '                <input class="text-base text-gray-700 text-justify mb-1 mr-2 w-full border-b-2 border-gray-200" type="text" name="'+(id+1)+'-table_v1-pt-0-0" value="">\n' +
            '            </div>\n' +
            '            <div class="flex items-center justify-center self-center text-white bg-blue-700 rounded-full hover:bg-blue-600 h-6 w-6 transition-all duration-500 mb-1 cursor-pointer add-pros" onclick="new ProsCons().addRow(`pros`, {target: this})" data-id="'+(id+1)+'" title="Add Pros">+</div>\n' +
            '        </div>\n' +
            '        <div class="w-full sm:w-1/2 flex-col justify-center items-start flex cons">\n' +
            '            <div class="flex-row flex justify-start items-center py-2 w-full">\n' +
            '                <div class="flex-row flex justify-start items-center text-red-700 bg-red-100 w-full h-6 rounded-sm mr-2 px-2">Cons</div>\n' +
            '            </div>\n' +
            '            <div class="flex-row flex justify-start items-center py-2 w-full">\n' +
            '                <div class="flex-row flex justify-center items-center text-red-700 bg-red-100 w-6 h-6 rounded-sm mr-2 flex-shrink-0">X</div>\n' +
            '                <input class="text-base text-gray-700 text-justify mb-1 mr-2 w-full border-b-2 border-gray-200" type="text" name="'+(id+1)+'-table_v1-pt-1-0" value="">\n' +
            '            </div>\n' +
            '            <div class="flex items-center justify-center self-center text-white bg-blue-700 rounded-full hover:bg-blue-600 h-6 w-6 transition-all duration-500 mb-1 cursor-pointer add-cons" onclick="new ProsCons().addRow(`cons`, {target: this})" data-id="'+(id+1)+'" title="Add Cons">+</div>\n' +
            '        </div>\n' +
            '    </div>\n' +
            '    <select class="absolute top-1 -right-11 border-2 border-blue-700 text-xs rounded language" data-id="'+(id+1)+'" onChange="new Language().toggle({target: this})" title="Change language for Pros &amp; Cons">\n' +
            '        <option value="en" selected="">En</option>\n' +
            '        <option value="es">Es</option>\n' +
            '        <option value="fr">Fr</option>\n' +
            '        <option value="pt">Pt</option>\n' +
            '    </select>\n' +
            '    <div class="absolute bottom-0 -right-7 text-red-500 bg-red-200 w-5 h-5 rounded text-xs leading-5 cursor-pointer text-center delete" onClick="new Delete().deleteTable({target: this})" title="Delete Pros &amp; Cons">X</div>\n' +
            '</div>';
        const element = (id === 0) ? document.querySelector('.form > input[name="_token"]') : document.querySelector('[data-name="' + id + '-en"]').parentElement;
        element.insertAdjacentHTML('afterend', row);
    }

}
new ProsCons().addEventListeners();
