'use strict';
class Sports {
    constructor() {
        this.sports = sports;
    }
    add(id) {
        let row = '' +
            '<div class="relative">\n' +
            '    <div class="flex items-center text-white bg-blue-700 rounded-full hover:bg-blue-600 cursor-pointer transition-all duration-500 absolute -bottom-3 -left-8 hidden add-after" onclick="new AddSection().addComponent({target: this})" data-id="'+(id+1)+'" title="Add component after Sports">\n' +
            '        <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24">\n' +
            '            <path d="M11 5a1 1 0 1 1 2 0v6h6a1 1 0 1 1 0 2h-6v6a1 1 0 1 1-2 0v-6H5a1 1 0 1 1 0-2h6V5z"/>\n' +
            '            <path d="M12 18l-4-4h8l-4 4z"/>\n' +
            '        </svg>\n' +
            '    </div>\n';
        ['en', 'es', 'fr', 'pt'].forEach(lang => {
            row += '<table data-name="'+(id+1)+'-'+lang+'" class="w-full border-collapse border-2 border-gray-200 rounded-xl shadow-gray-400 shadow-lg '+(lang === 'en' ? '' : 'hidden')+'">\n' +
                '       <tbody>\n' +
                '            <input hidden="hidden" name="'+(id+1)+'-table_v3-'+lang+'" value="1">\n';
            for (let i = 0; i < this.sports[lang].length; i++) {
                if(i % 4 === 0){
                    row += ' <tr class="'+(i % 8 === 0 ? '' : 'bg-gray-100') +'">\n';
                }
                row += '        <td class="text-xs sm:text-sm px-1 py-2 sm:p-2 w-1/4 border-2 border-gray-200">'+this.sports[lang][i]+'</td>\n';
                if(this.sports[lang].length === i + 1 && this.sports[lang].length % 4 !== 0){
                    for(let k = 0; k < 4 - (i + 1) % 4; k++){
                        row += '<td class="text-xs sm:text-sm px-1 py-2 sm:p-2 w-1/4 border-2 border-gray-200">&nbsp;</td>\n';
                    }
                }
                if((i+1) % 4 === 0){
                    row += '</tr>\n';
                }
            }
            row += '    </tbody>\n' +
                '</table>\n';
        });
        row += '<select class="absolute top-1 -right-11 border-2 border-blue-700 text-xs rounded language" data-id="'+(id+1)+'" onChange="new Language().toggle({target: this})" title="Change language for Sports">\n' +
            '       <option value="en" selected>En</option>\n' +
            '       <option value="es">Es</option>\n' +
            '       <option value="fr">Fr</option>\n' +
            '       <option value="pt">Pt</option>\n' +
            '   </select>\n' +
            '   <div class="absolute bottom-0 -right-7 text-red-500 bg-red-200 w-5 h-5 rounded text-xs leading-5 cursor-pointer text-center delete" onClick="new Delete().deleteTable({target: this})" title="Delete Sports">X</div>\n' +
            '</div>';
        const element = (id === 0) ? document.querySelector('.form > input[name="_token"]') : document.querySelector('[data-name="' + id + '-en"]').parentElement;
        element.insertAdjacentHTML('afterend', row);
    }
}
