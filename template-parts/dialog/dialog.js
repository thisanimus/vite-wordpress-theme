const Dialog = (dialog) => {
	const trigger = document.querySelector(`[data-trigger-dialog=${dialog.id}]`);
	trigger.addEventListener('click', () => {
		dialog.showModal();
	});
};
export default Dialog;
