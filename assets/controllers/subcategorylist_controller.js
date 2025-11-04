import { Controller } from "@hotwired/stimulus";
import { DataTable } from 'simple-datatables';

export default class extends Controller {
    connect() {
        const table = document.getElementById("subcategory-list-table");

        if(table) {
            const dataTable = new DataTable("#subcategory-list-table", {
                paging: true,
                perPage: 5,
                perPageSelect: [5, 10, 15, 20, 25],
                sortable: true,
                searchable: true,
            });
        }
    }
}