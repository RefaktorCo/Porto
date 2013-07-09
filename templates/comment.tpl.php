<?php
/**
 * @file comment.tpl.php
 * Contour's comment template.
 */
 
global $parent_root; 

?>

<div class="comment">
  <div class="comment-avatar">
    <?php 
      if (!$picture) {
        echo '<img src="'.$parent_root.'/images/anon.png" alt="anon">'; 
      }
      else { 
        print $picture;   
      }
    ?>
  </div>
  <div class="comment_body">
    <p class="comment-meta caps"> 
      <i class="greytext icon-user"></i><span class="smallfont greytext">  by <?php print $author; ?></span> &nbsp; &nbsp;
      <i class="greytext icon-calendar"></i> <span class="smallfont greytext"><?php print format_date($node->created, 'custom', 'M d, Y'); ?> </span> &nbsp; &nbsp;
      <i class="greytext icon-info-sign"></i> <?php print $permalink; ?>
    </p>
    <?php if ($new): ?>
    <span class="new"><?php print $new ?></span>
    <?php endif; ?>
    <div class="comment_content"<?php print $content_attributes; ?>>
      <?php hide($content['links']); print render($content); ?>
      <?php if ($signature): ?>
       <div class="user-signature clearfix">
         <?php print $signature ?>
      </div>
     <?php endif; ?>
    </div>
    <?php if (!empty($content['links'])) { print render($content['links']); } ?>
  </div>
<div class="clearfix"></div>
</div>