'use strict';
class Support {
    constructor() {
        this.addRowBtn = document.querySelectorAll('.add-row-support');
        this.bookmakerPhone = bookmakerPhone;
        this.bookmakerEmail = bookmakerEmail;
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
        const k = table.children.length - 1;
        const i = table.querySelectorAll('input').length;
        const row = '<input name="'+id+'-support-'+lang+'-'+i+'" class="text-base text-gray-700 text-justify indent-10 mb-4 w-full border-b-2 border-gray" type="text" value="">';
        table.children[k].insertAdjacentHTML('afterend', row);
    }
    add(id) {
        let row = '' +
            '<div class="relative border-b-2 border-gray-200">\n' +
            '    <div class="flex items-center text-white bg-blue-700 rounded-full hover:bg-blue-600 cursor-pointer transition-all duration-500 absolute -bottom-3 -left-8 add-after hidden" onclick="new AddSection().addComponent({target: this})" data-id="'+(id+1)+'" title="Add component after Support">\n' +
            '        <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24">\n' +
            '            <path d="M11 5a1 1 0 1 1 2 0v6h6a1 1 0 1 1 0 2h-6v6a1 1 0 1 1-2 0v-6H5a1 1 0 1 1 0-2h6V5z"></path>\n' +
            '            <path d="M12 18l-4-4h8l-4 4z"></path>\n' +
            '        </svg>\n' +
            '    </div>\n' +
            '    <div data-name="'+(id+1)+'-en" class="text-justify mt-4 ">\n';
        if (this.bookmakerPhone){
            row += ' <a href="tel:'+this.bookmakerPhone+'" class="text-base text-gray-700 text-justify indent-10 block">Phone - '+this.bookmakerPhone+'</a>\n';
        }
        if (this.bookmakerEmail){
            row += ' <a href="mailto:'+this.bookmakerEmail+'" class="text-base text-gray-700 text-justify indent-10 block">E-mail - '+this.bookmakerEmail+'</a>\n';
        }
        row += '     <input name="'+(id+1)+'-support-en-0" class="text-base text-gray-700 text-justify indent-10 mb-4 w-full border-b-2 border-gray" type="text" value="">\n' +
            '    </div>\n' +
            '    <div data-name="'+(id+1)+'-es" class="text-justify mt-4  hidden ">\n';
        if (this.bookmakerPhone){
            row += ' <a href="tel:'+this.bookmakerPhone+'" class="text-base text-gray-700 text-justify indent-10 block">Phone - '+this.bookmakerPhone+'</a>\n';
        }
        if (this.bookmakerEmail){
            row += ' <a href="mailto:'+this.bookmakerEmail+'" class="text-base text-gray-700 text-justify indent-10 block">E-mail - '+this.bookmakerEmail+'</a>\n';
        }
        row += '     <input name="'+(id+1)+'-support-es-0" class="text-base text-gray-700 text-justify indent-10 mb-4 w-full border-b-2 border-gray" type="text" value="">\n' +
            '    </div>\n' +
            '    <div data-name="'+(id+1)+'-fr" class="text-justify mt-4  hidden ">\n';
        if (this.bookmakerPhone){
            row += ' <a href="tel:'+this.bookmakerPhone+'" class="text-base text-gray-700 text-justify indent-10 block">Phone - '+this.bookmakerPhone+'</a>\n';
        }
        if (this.bookmakerEmail){
            row += ' <a href="mailto:'+this.bookmakerEmail+'" class="text-base text-gray-700 text-justify indent-10 block">E-mail - '+this.bookmakerEmail+'</a>\n';
        }
        row += '     <input name="'+(id+1)+'-support-fr-0" class="text-base text-gray-700 text-justify indent-10 mb-4 w-full border-b-2 border-gray" type="text" value="">\n' +
            '    </div>\n' +
            '    <div data-name="'+(id+1)+'-pt" class="text-justify mt-4  hidden ">\n';
        if (this.bookmakerPhone){
            row += ' <a href="tel:'+this.bookmakerPhone+'" class="text-base text-gray-700 text-justify indent-10 block">Phone - '+this.bookmakerPhone+'</a>\n';
        }
        if (this.bookmakerEmail){
            row += ' <a href="mailto:'+this.bookmakerEmail+'" class="text-base text-gray-700 text-justify indent-10 block">E-mail - '+this.bookmakerEmail+'</a>\n';
        }
        row += '     <input name="'+(id+1)+'-support-pt-0" class="text-base text-gray-700 text-justify indent-10 mb-4 w-full border-b-2 border-gray" type="text" value="">\n' +
            '    </div>\n' +
            '    <div class="flex items-center justify-center self-center text-white bg-blue-700 rounded-full hover:bg-blue-600 h-6 w-6 transition-all duration-500 mb-2 mx-auto cursor-pointer add-row-support" onclick="new Support().addRow({target: this})" data-id="'+(id+1)+'" title="Add Row">+</div>\n' +
            '    <select class="absolute top-1 -right-11 border-2 border-blue-700 text-xs rounded language" data-id="'+(id+1)+'" onChange="new Language().toggle({target: this})" title="Change language for Support">\n' +
            '        <option value="en" selected="">En</option>\n' +
            '        <option value="es">Es</option>\n' +
            '        <option value="fr">Fr</option>\n' +
            '        <option value="pt">Pt</option>\n' +
            '    </select>\n' +
            '    <div class="absolute bottom-0 -right-7 text-red-500 bg-red-200 w-5 h-5 rounded text-xs leading-5 cursor-pointer text-center delete" onClick="new Delete().deleteTable({target: this})" title="Delete Support">X</div>\n' +
            '</div>';
        const element = (id === 0) ? document.querySelector('.form > input[name="_token"]') : document.querySelector('[data-name="' + id + '-en"]').parentElement;
        element.insertAdjacentHTML('afterend', row);
    }
}
new Support().addEventListeners();
