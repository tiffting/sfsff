<?php
  $page_id = 'index';
  $full_nav = true;
  require 'inc/top.inc.php';
?>
<script type="text/javascript" charset="utf-8">
  $(function(){
    new ElementPositioner({ elements : $('.navigation > ul li a') });
  });
</script>

<!-- nav is the only thing on this page, it's being restyled to fill up the whole page -->

<?php require 'inc/bottom.inc.php'; ?>