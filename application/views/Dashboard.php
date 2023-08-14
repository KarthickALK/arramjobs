<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    /* Highlight the active menu item */
.navbar-nav .nav-item.active .nav-link {
    background-color: #007bff;
    color: #fff;
}

  <Style>
</head>
<body>
  <!-- Example navbar HTML -->
<ul class="navbar-nav">
    <li class="nav-item <?php if ($active_menu == 'home') echo 'active'; ?>">
        <a class="nav-link" href="<?php echo site_url('home'); ?>">dashboard</a>
    </li>
    <li class="nav-item <?php if ($active_menu == 'about') echo 'active'; ?>">
        <a class="nav-link" href="<?php echo site_url('about'); ?>">profile</a>
    </li>
    <li class="nav-item <?php if ($active_menu == 'services') echo 'active'; ?>">
        <a class="nav-link" href="<?php echo site_url('services'); ?>">jobs</a>
    </li>
   
</ul>

</body>
</html>