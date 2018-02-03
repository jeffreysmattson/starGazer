  <div id="wrapper">
    <div id="container" class="container clearfix">
      <header>
        <?php print render($page['header']); ?>
      </header>
      <nav class="navbar navbar-default">
          <div class="container-fluid">
            <div class="navbar-header">
              <?php if ($logo): ?>
                <a href="<?php print $front_page ?>">
                <img src="<?php print $logo ?>" alt="<?php print $site_name ?>" title="<?php print $site_name ?>" id="logo" />
                </a>
              <?php endif; ?>
            </div>
            <?php if ($primary_nav): print $primary_nav; endif; ?>
            <?php if ($secondary_nav): print $secondary_nav; endif; ?>
          </div>
        </nav>
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
                  <?php if ($page['highlighted']): ?>
                  <div id="highlighted">
                    <?php print render($page['highlighted']); ?>
                  </div>
                  <?php endif; ?>
                  <a id="main-content"></a>
                  <?php if ($tabs): ?>
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
        </div>
      </div>
    </div> <!-- /#container -->
  </div> <!-- /#wrapper -->
