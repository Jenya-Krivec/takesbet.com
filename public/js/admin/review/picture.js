'use strict';
class Picture {
    constructor() {
    }
    add(id) {
        const row = '' +
            '<div class="relative">\n' +
            '    <div class="flex items-center text-white bg-blue-700 rounded-full hover:bg-blue-600 cursor-pointer transition-all duration-500 absolute -bottom-3 -left-8 add-after hidden" onclick="new AddSection().addComponent({target: this})" data-id="'+(id+1)+'" title="Add component after Image">\n' +
            '        <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24">\n' +
            '            <path d="M11 5a1 1 0 1 1 2 0v6h6a1 1 0 1 1 0 2h-6v6a1 1 0 1 1-2 0v-6H5a1 1 0 1 1 0-2h6V5z"></path>\n' +
            '            <path d="M12 18l-4-4h8l-4 4z"></path>\n' +
            '        </svg>\n' +
            '    </div>\n' +
            '    <img data-name="'+(id+1)+'-en" class="w-full my-4" src="" alt="">\n' +
            '    <div class="absolute bottom-0 -right-7 text-red-500 bg-red-200 w-5 h-5 rounded text-xs leading-5 cursor-pointer text-center delete" onClick="new Delete().deleteTable({target: this})" title="Delete Image">X</div>\n' +
            '    <div class="fixed z-50 top-0 left-0 flex justify-center items-center w-full h-full hidden rounded" id="loader-'+(id+1)+'" style="background-color: rgba(0,0,0,0.3)">\n' +
            '       <div class="flex justify-center items-center flex-col w-1/2 h-48 bg-white border border-blue-700 rounded relative">\n' +
            '           <div class="flex justify-center items-center w-6 h-6 bg-blue-700 text-sm text-white rounded-full hidden cursor-pointer absolute top-1 right-1" id="close-'+(id+1)+'" title="Complete">✓</div>\n' +
            '           <div>\n' +
            '               <label for="'+(id+1)+'-img-en" class="text-sm text-gray-500">Image for Desktop:</label>\n' +
            '               <input name="'+(id+1)+'-img-en" type="file" accept="image/*" class="text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:bg-blue-600 file:text-white hover:file:bg-blue-700">\n' +
            '           </div>\n' +
            '           <div>\n' +
            '               <label for="'+(id+1)+'-img-en" class="text-sm text-gray-500">Image for Mobile:</label>\n' +
            '               <input name="'+(id+1)+'-img400-en" type="file" accept="image/*" class="mt-2 text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:bg-blue-600 file:text-white hover:file:bg-blue-700">\n' +
            '           </div>\n' +
            '       </div>\n' +
            '    </div>\n' +
            '</div>';
        const element = (id === 0) ? document.querySelector('.form > input[name="_token"]') : document.querySelector('[data-name="' + id + '-en"]').parentElement;
        element.insertAdjacentHTML('afterend', row);

        setTimeout( () => {
            const image = document.querySelector('img[data-name="'+(id+1)+'-en"]');
            const loader = document.querySelector('#loader-'+(id+1));
            const close = document.querySelector('#close-'+(id+1));
            const input = document.querySelector('[name="'+(id+1)+'-img-en"]');
            const inputMobile = document.querySelector('[name="'+(id+1)+'-img400-en"]');
            input.addEventListener('change', () => {
                if (input.files.length > 0 && inputMobile.files.length > 0) {
                    close.classList.remove('hidden');
                }else {
                    close.classList.add('hidden');
                }
            });
            inputMobile.addEventListener('change', () => {
                if (input.files.length > 0 && inputMobile.files.length > 0) {
                    close.classList.remove('hidden');
                }else {
                    close.classList.add('hidden');
                }
            });
            close.addEventListener('click', () => {
                image.src = URL.createObjectURL(input.files[0]);
                loader.classList.add('hidden');
            });
            loader.classList.remove('hidden');
        }, 100);

    }
}
