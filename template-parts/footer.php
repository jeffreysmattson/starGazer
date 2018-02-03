<div class="row">
  <div class="col-sm-12">
    <div id="footer-wrapper">
      <div class="section">

      <?php if ($page['footer_firstcolumn'] || $page['footer_secondcolumn'] || $page['footer_thirdcolumn'] || $page['footer_fourthcolumn']) : ?>
        <div id="footer-columns" class="clearfix">
          <div class="row">
            <div class="col-md-3">
              <?php print render($page['footer_firstcolumn']); ?>
            </div>
            <div class="col-md-3">
              <?php print render($page['footer_secondcolumn']); ?>
            </div>
            <div class="col-md-3">
              <?php print render($page['footer_thirdcolumn']); ?>
            </div>
            <div class="col-md-3">
              <?php $loginBlock = drupal_get_form("search_block_form"); ?>
              <?php print(drupal_render($loginBlock)); ?>
            </div>
          </div>
        </div> <!-- /#footer-columns -->
      <?php endif; ?>

  </div>
</div> <!-- /.section, /#footer-wrapper -->