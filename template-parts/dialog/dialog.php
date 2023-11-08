<dialog class="dialog" id="<?= $args['id'] ?>">
	<?= $args['content'] ?>
	<form method="dialog">
		<button>Close</button>
	</form>
</dialog>

<button data-trigger-dialog="<?= $args['id'] ?>"><?= $args['button_text'] ?></button>