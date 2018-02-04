  <div id="wrapper">
    <div id="container" class="container clearfix">
      <?php include_once(drupal_get_path('theme', $GLOBALS['theme']).'/template-parts/header.php'); ?>
      <div class="contentContainer">
      <div class="row">
        <div class="col-sm-12">
          <?php print render($page['featured']); ?>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <div id="center">
            <div id="squeeze">
              <div class="right-corner">
                <div class="left-corner">
                  <?php print $breadcrumb; ?>
                  <a id="main-content"></a>
                 <?php if ($tabs) : ?>
                  <div id="tabs-wrapper" class="clearfix">
                    <?php endif; ?>
                    <?php print render($title_prefix); ?>
                    <?php if ($title): ?>
                      <h1<?php print $tabs ? ' class="with-tabs"' : '' ?>><?php print $title ?></h1>
                    <?php endif; ?>
                    <?php print render($title_suffix); ?>
                    <?php if ($tabs): ?><?php print render($tabs); ?>
                  </div>
                  <?php endif; ?>
                  <?php print render($tabs2); ?>
                  <?php print $messages; ?>
                  <?php print render($page['help']); ?>
                  <?php if ($action_links): ?>
                    <ul class="action-links"><?php print render($action_links); ?></ul>
                  <?php endif; ?>
                  <div class="clearfix">
                    <?php print render($page['content']); ?>
                  </div>
                  <?php print $feed_icons ?>
                </div>
              </div>
            </div>
          </div> <!-- /.left-corner, /.right-corner, /#squeeze, /#center -->
        </div>
      </div> <!-- end row -->
    </div>
    <?php include_once(drupal_get_path('theme', $GLOBALS['theme']).'/template-parts/footer.php'); ?>
    </div>
  </div>
</div> <!-- /#container -->
</div> <!-- /#wrapper -->
