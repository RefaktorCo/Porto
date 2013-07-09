<?php

/**
 * @file views-view-unformatted--contour-view.tpl.php
 * Contour's custom view unformatted template for all views tagged with "Contour Views".
 *
 * @ingroup views_templates
 */
?>

<?php foreach ($rows as $id => $row): ?>
  <?php print $row; ?>
<?php endforeach; ?>