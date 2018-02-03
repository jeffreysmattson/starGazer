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
      <div class="row contentContainer">
        <?php if (!isset($loggedIn)) : ?>
        <div class="col-md-6 col-md-offset-3 loginWrapper">
          <?php print $messages; ?>
          <?php $loginForm = drupal_get_form('user_login'); ?>
          <?php print drupal_render($loginForm); ?>
          <a href="user/password">Request new password"</a>
        </div>
        <?php else : ?>
          <div class="col-md-4 profileWrapper">
            <img src="<?php echo $profileImageUrl; ?>">
          </div>
          <div class="col-md-6 profileWrapper">
            <h3><?php echo $firstName . ' ' . $lastName; ?></h3>
            <hr>
            <p>User Name: <b><?php echo $userName; ?></b></p>
            <p>Email: <b><?php echo $mail; ?></b></p>
            <?php if(!empty($businessName)) : ?>
              <p>Business Name: <b><?php echo $businessName; ?></b></p>
            <?php endif; ?>
            <p>Timezone: <b><?php echo $timezone; ?></b></p>
          </div>
        <?php endif; ?>
      </div>
      <?php include_once(drupal_get_path('theme',$GLOBALS['theme']).'/template-parts/footer.php'); ?>
      </div>
    </div>
  </div> <!-- /#container -->
</div> <!-- /#wrapper -->