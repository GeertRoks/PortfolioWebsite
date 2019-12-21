<?php

if (!isset($_GET['entry_id'])) {
  header('location:index.php');
}

require_once '../classes/entry.php';

$entry = new Entry();

$entry->SqlSelectEntryById($_GET['entry_id']);

//print_r($_GET);
//print_r($entry);

?>

<article>
  <h2><?php echo $entry->getTitle(); ?></h2>
  <p><?php echo $entry->getContent(); ?></p>
</article>
