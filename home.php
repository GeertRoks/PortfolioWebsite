<?php
require_once 'classes/entry.php';

$query = 'SELECT * FROM entries ORDER BY entry_id DESC LIMIT 7;';

require_once('classes/dbh.php');

$dbh = new Dbh();

$rows = $dbh->executeSelect($query);

//print_r($rows);

foreach ($rows as $row) {
	$entry = new Entry();

	$entry->setByRow($row);

?>
      <article class="post" ng-repeat="article in articles" ng-show="isSelected('home')">
        <div id="post-image">
          <img src="images/{{article.img}}" alt="placeholder">
        </div>
        <div id="post-content">
          <h2 id="postname"><?php echo $entry->getTitle(); ?></h2>
          <p id="postdescription"><?php echo $entry->getExcerpt(); ?></p>
        </div>
      </article>

<?php } ?>
