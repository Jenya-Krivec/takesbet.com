'use strict';
class Delete {
    constructor() {
        this.delete = document.querySelectorAll('.delete');
    }
    addEventListeners() {
        this.delete.forEach(element => {
            element.addEventListener('click', this.deleteTable.bind(this));
        });
    }
    deleteTable(event) {
        const table = event.target.parentElement;
        table.remove();
    }
}
new Delete().addEventListeners();
