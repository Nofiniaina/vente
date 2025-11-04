import { startStimulusApp } from '@symfony/stimulus-bundle';
import categorylist_controller from './controllers/categorylist_controller.js';
import subcategorylist_controller from './controllers/subcategorylist_controller.js';
import productlist_controller from './controllers/productlist_controller.js';

const app = startStimulusApp();
// register any custom, 3rd party controllers here
// app.register('some_controller_name', SomeImportedController);
app.register('category-list-table', categorylist_controller);
app.register('subcategory-list-table', subcategorylist_controller);
app.register('product-list-table', productlist_controller);