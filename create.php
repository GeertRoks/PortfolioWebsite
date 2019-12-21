<?php
	require_once 'templates/header.php';
	require_once 'classes/entry.php';

	if (isset($_POST['publishing'])) {

		$entry = new Entry();
		$entry->createNewFromPOST($_POST);
		$entry->SqlInsertEntry();
?>

	<a href="single.php?entry_id=<?php echo $entry->getId(); ?>">View Entry</a>
<?php
	}
	?>

<div class="wrapperContent">
	<section class="content">
		<article>

			<div id="create_form">
				<form action="create.php" method="POST">

				<label for="">Title</label> <br>
				<input type="text" name="entry_title" id="title" maxlength="35"/> <br>

				<label for="">Author</label><br>
				<input type="text" name="entry_author" id="author" maxlength="20"/><br>

				<label for="">Excerpt</label><br>
				<textarea name="entry_excerpt" id="title" cols="30" rows="10" maxlength="500"></textarea><br>

				<label for="">Content</label><br>
				<textarea name="entry_content" id="title" cols="30" rows="10" maxlength="5000"></textarea><br>

				<input type="hidden" name="publishing" /><br>

				<input type="submit" name="submit" id="submit" value="Publish" /><br>
				</form>
			</div>
		</article>
	</section>
</div>

<?php
include_once "templates/footer.php"
?>
