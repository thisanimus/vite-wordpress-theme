// Vite Stuff
// Accept HMR as per: https://vitejs.dev/guide/api-hmr.html
if (import.meta.hot) {
	import.meta.hot.accept(() => {
		console.log('HMR');
	});
}

// SCSS
import '../src/main.scss';

// Import local js
import Dialog from '../template-parts/dialog/dialog.js';

// Import from a node_module
import Cookies from 'js-cookie';

// use an imported method from a node_module
Cookies.set('foo', 'bar');

const dialogs = document.querySelectorAll('dialog.dialog');
dialogs.forEach((dialog) => {
	Dialog(dialog);
});
