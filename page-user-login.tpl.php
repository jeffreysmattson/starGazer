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
      <div class="row">
        test
        <div class="col-sm-12">
          hello8
          <?php print $messages; ?>
          <?php print drupal_render(drupal_get_form('user_login')); ?>
          <a href="user/password">Request new password"</a>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <div id="footer-wrapper">
            <div class="section">

            <?php if ($page['footer_firstcolumn'] || $page['footer_secondcolumn'] || $page['footer_thirdcolumn'] || $page['footer_fourthcolumn']): ?>
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
                    <?php print render($page['footer_fourthcolumn']); ?>
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