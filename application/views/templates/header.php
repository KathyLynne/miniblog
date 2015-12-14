<?php echo doctype('HTML5'); ?>
<html>
  <head>
    <meta charset="utf-8">
    <title>MiniBlog</title>
    <?php echo link_tag('public/styles/stylesheets/main.css') ?>
    <script type="text/javascript"
            src="<?php echo base_url();?>public/js/boilerplate/vendor/jquery-1.11.3.min.js">
    </script>
    <script type="text/javascript"
            src="<?php echo base_url();?>public/js/boilerplate/vendor/modernizr-2.8.3.min.js">
    </script>
    </script>
    <script type="text/javascript" src="<?php echo base_url();?>public/js/main.js">
    </script>
  </head>
  <body>
    <header>
      <div class="nav-left">
        <p>
        <?php echo anchor(base_url(), 'Home'); ?>
        </p>
      </div>
      <div class="nav-right">
        <ul class='menu'>
          <li><?php echo anchor("blog/create", "Add Entry"); ?></li>
        </ul>
      </div>
    </header>
    <section class="main-content">
