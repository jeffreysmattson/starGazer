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