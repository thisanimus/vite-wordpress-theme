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
import Dialog from '../partials/dialog/dialog.js';

const dialogs = document.querySelectorAll('dialog.dialog');
dialogs.forEach((dialog) => {
	Dialog(dialog);
});
