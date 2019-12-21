<?php
require_once '../classes/entry.php';

$query = 'SELECT * FROM articles ORDER BY entry_id DESC LIMIT 7;';

require_once('../classes/dbh.php');

$dbh = new Dbh();

$rows = $dbh->executeSelect($query);

//print_r($rows);

foreach ($rows as $row) {
	$entry = new Entry();

	$entry->setByRow($row);

?>
      <article class="post" data-id='<?php echo $entry->getId(); ?>'>
        <div class="postImage">
          <img src="images/imageplaceholder.jpg" alt="placeholder">
        </div>
        <div class="postContent">
					<div class="postTitle">
	          <h3 class="postName"><?php echo $entry->getTitle(); ?></h3>
						<p class="postDate"><?php echo $entry->getDate(); ?></p>
					</div>
					<div class="postExcerpt">
						<p><?php echo $entry->getExcerpt(); ?></p>
					</div>
        </div>
      </article>

<?php } ?>
