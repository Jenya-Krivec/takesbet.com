'use strict';
class Comparison {
    constructor() {
        this.selectBookmaker2 = document.querySelectorAll('.select-bookmaker-2');
        this.selectBookmaker3 = document.querySelectorAll('.select-bookmaker-3');
        this.addRowBtn = document.querySelectorAll('.add-row-comparison');
    }
    addEventListeners() {
        this.selectBookmaker2.forEach((btn) => {
            btn.addEventListener('change', this.changeBookmaker.bind(this, 2));
        });
        this.selectBookmaker3.forEach((btn) => {
            btn.addEventListener('change', this.changeBookmaker.bind(this, 3));
        });
        this.addRowBtn.forEach((btn) => {
            btn.addEventListener('click', this.addRow.bind(this));
        });
    }
    changeBookmaker(i, event) {
        const id = event.target.getAttribute('data-id');
        const elements = document.querySelectorAll('.link-for-review-' + i);
        const newValue = event.target.value;
        elements.forEach(a => {
            a.innerText = newValue + ' ' + a.innerText.split(' ')[1];
        });
        ['en', 'es', 'fr', 'pt'].forEach(lang => {
            const select = document.querySelector(`[name="${id}-table_v2-${lang}-0-${i}"]`);
            Array.from(select.children).forEach(option => {
                option.selected = option.value === newValue;
            });
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
        const i = table.children.length - 3;
        const isEven = (i % 2 === 0) ? 'bg-gray-100' : '';
        table.children[(i+1)].classList.toggle('bg-gray-100');
        const row = '<div class="flex justify-end items-center w-full '+isEven+'">\n' +
            '                   <input name="'+id+'-table_v2-'+lang+'-'+(i+1)+'-0" class="text-xs sm:text-base px-1 py-2 sm:p-2 border-gray-200 border-r-2 w-full" type="text" value="">\n' +
            '                   <input name="'+id+'-table_v2-'+lang+'-'+(i+1)+'-1" class="text-xs sm:text-base px-1 py-2 sm:p-2 w-24 sm:w-28 flex-shrink-0" type="text" value="">\n' +
            '                   <input name="'+id+'-table_v2-'+lang+'-'+(i+1)+'-2" class="text-xs sm:text-base px-1 py-2 sm:p-2 w-16 sm:w-28 flex-shrink-0" type="text" value="">\n' +
            '                   <input name="'+id+'-table_v2-'+lang+'-'+(i+1)+'-3" class="text-xs sm:text-base px-1 py-2 sm:p-2 w-16 sm:w-28 flex-shrink-0" type="text" value="">\n' +
            '              </div>'
        table.children[i].insertAdjacentHTML('afterend', row);
    }
    add(id) {
        let row = '' +
            '<div class="relative">\n' +
            '    <div class="flex items-center text-white bg-blue-700 rounded-full hover:bg-blue-600 cursor-pointer transition-all duration-500 absolute -bottom-3 -left-8 hidden add-after" onclick="new AddSection().addComponent({target: this})" data-id="'+(id+1)+'" title="Add component after Сomparison">\n' +
            '        <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24">\n' +
            '            <path d="M11 5a1 1 0 1 1 2 0v6h6a1 1 0 1 1 0 2h-6v6a1 1 0 1 1-2 0v-6H5a1 1 0 1 1 0-2h6V5z"/>\n' +
            '            <path d="M12 18l-4-4h8l-4 4z"/>\n' +
            '        </svg>\n' +
            '    </div>\n';
        ['en', 'es', 'fr', 'pt'].forEach(lang => {
            row += '<div data-name="'+(id+1)+'-'+lang+'" class="flex flex-col justify-center items-center border-gray-200 border-2 rounded-xl shadow-gray-400 shadow-lg '+(lang !== 'en' ? 'hidden' : '')+'">\n' +
            '        <div class="flex justify-end items-center bg-blue-700 w-full rounded-tr-xl rounded-tl-xl">\n' +
            '            <span class="text-white font-bold text-sm sm:text-lg px-1 py-2 sm:p-2 w-full">Event:</span>\n' +
            '            <span class="text-white font-bold text-sm sm:text-lg px-1 py-2 sm:p-2 w-24 sm:w-28 flex-shrink-0" id="rate">'+bookmakerName+'</span>\n' +
            '            <select name="'+(id+1)+'-table_v2-'+lang+'-0-2" class="text-lg font-bold text-white w-28 select-bookmaker-2" onchange="new Comparison().changeBookmaker(2, {target: this})" data-id="'+(id+1)+'" title="Select Bookmaker">\n';
            bookmakers.forEach(bookmaker => {
                row += '    <option class="text-black" value="'+bookmaker+'">'+bookmaker+'</option>\n';
            });
            row += '     </select>\n' +
            '            <select name="'+(id+1)+'-table_v2-'+lang+'-0-3" class="text-lg font-bold text-white w-28 select-bookmaker-3" onchange="new Comparison().changeBookmaker(3, {target: this})" data-id="'+(id+1)+'" title="Select Bookmaker">\n';
            bookmakers.forEach(bookmaker => {
                row += '    <option class="text-black" value="'+bookmaker+'">'+bookmaker+'</option>\n';
            });
            row += '     </select>\n' +
            '       </div>\n' +
            '       <div class="flex justify-end items-center w-full bg-gray-100">\n' +
            '            <input name="'+(id+1)+'-table_v2-'+lang+'-1-0" class="text-xs sm:text-base px-1 py-2 sm:p-2 border-gray-200 border-r-2 w-full" type="text" value=""/>\n' +
            '            <input name="'+(id+1)+'-table_v2-'+lang+'-1-1" class="text-xs sm:text-base px-1 py-2 sm:p-2 w-24 sm:w-28 flex-shrink-0" type="text" value=""/>\n' +
            '            <input name="'+(id+1)+'-table_v2-'+lang+'-1-2" class="text-xs sm:text-base px-1 py-2 sm:p-2 w-16 sm:w-28 flex-shrink-0" type="text" value=""/>\n' +
            '            <input name="'+(id+1)+'-table_v2-'+lang+'-1-3" class="text-xs sm:text-base px-1 py-2 sm:p-2 w-16 sm:w-28 flex-shrink-0" type="text" value=""/>\n' +
            '       </div>\n';

            row += '<div class="flex justify-end items-center w-full rounded-br-xl rounded-bl-xl">\n' +
            '            <span class="sm:border-gray-200 sm:border-r-2 w-full h-10"></span>\n' +
            '            <span class="w-24 sm:w-28 flex-shrink-0 h-10"></span>\n' +
            '            <span class="px-1 py-2 sm:p-2 w-28 flex-shrink-0 text-center">\n' +
            '                <a href="" class="text-blue-700 text-xs link-for-review-2">. Review</a>\n' +
            '            </span>\n' +
            '            <span class="px-1 py-2 sm:p-2 w-28 flex-shrink-0 text-center">\n' +
            '                <a href="" class="text-blue-700 text-xs link-for-review-3">. Review</a>\n' +
            '            </span>\n' +
            '        </div>\n' +
            '        <div class="flex items-center justify-center self-center text-white bg-blue-700 rounded-full hover:bg-blue-600 h-6 w-6 transition-all duration-500 my-1 cursor-pointer add-row-comparison" onclick="new Comparison().addRow({target: this})" data-id="'+(id+1)+'" title="Add Row">+</div>\n' +
            '    </div>\n';
        });
        row += ' <select class="absolute top-1 -right-11 border-2 border-blue-700 text-xs rounded language" onChange="new Language().toggle({target: this})" data-id="'+(id+1)+'" title="Change language for Сomparison">\n' +
            '        <option value="en" selected>En</option>\n' +
            '        <option value="es">Es</option>\n' +
            '        <option value="fr">Fr</option>\n' +
            '        <option value="pt">Pt</option>\n' +
            '    </select>\n' +
            '    <div class="absolute bottom-0 -right-7 text-red-500 bg-red-200 w-5 h-5 rounded text-xs leading-5 cursor-pointer text-center delete" onClick="new Delete().deleteTable({target: this})" title="Delete Сomparison">X</div>\n' +
            '</div>';
        const element = (id === 0) ? document.querySelector('.form > input[name="_token"]') : document.querySelector('[data-name="' + id + '-en"]').parentElement;
        element.insertAdjacentHTML('afterend', row);
    }
}
new Comparison().addEventListeners();
