<?php

/**
 * @file views-view-unformatted--Porto-view.tpl.php
 * Porto's custom view unformatted template for all views tagged with "Porto Views".
 *
 * @ingroup views_templates
 */
?>

<?php $count = '0'; foreach ($rows as $id => $row): ?>
  <?php if ($count % 2 == 0) { echo "<div>"; } ?>
  <?php $count++; print $row; ?>
  <?php if ($count % 2 == 0) { echo "</div>"; } ?><!--/end test -->
<?php endforeach; ?>