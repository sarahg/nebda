<!doctype html>
<html class="no-js" lang="en">
  <head>
    <?php include_once('../config.php'); ?>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Northeast Brewers + Distillers Association</title>
    <link rel="stylesheet" href="<?php echo $base_url; ?>/css/foundation.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Oswald:400,700|Quattrocento+Sans:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo $base_url; ?>/css/styles.css" />
    <script src="<?php echo $base_url; ?>/js/vendor/modernizr.js"></script>
  </head>
  <body>

    <div class="row">
      <div class="large-12 columns">
        <a href="<?php echo $base_url; ?>" class="logo"><img src="<?php echo $base_url; ?>/img/nebda.png" alt="NEBDA logo"></a>
        <ul id="main-menu" class="menu-bar">
          <li><a href="<?php echo $base_url; ?>/members">Our Members</a></li>
          <li><a href="mailto:nebdamn@gmail.com">Contact Us</a></li>
        </ul>
      </div>
    </div>

    <div class="row">
      <div class="large-8 medium-8 columns">
        <div class="title"><h1>Our Members</h1></div>
        <div class="member-logos"><?php include_once('../inc/functions.php'); echo nebda_get_member_logos($base_url); ?></div>
      </div>

      <div class="large-4 medium-4 columns">
        <div class="social">
          <a class="facebook" href="https://www.facebook.com/nebdaorg"><i class="fa fa-facebook-square fa-4x"></i></a>
          <a class="twitter" href="https://twitter.com/nebda_mn"><i class="fa fa-twitter-square fa-4x"></i></a>
          <a class="google-plus" href="https://plus.google.com/share?url={http://www.nebdamn.org}"
            onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-google-plus-square fa-4x"></i></a>
        </div>
        <div class="panel">
          <h3>About NEBDA</h3>
          <p>The mission of this organization is to improve our community and strengthen our industry by providing a platform for communication and collaboration for all breweries, distilleries, and cideries located in Northeast Minneapolis.</p>
        </div>
      </div>
    </div>

    <footer class="row">
      <div class="large-12 columns">
        <hr/>
        <div class="row">
          <div class="large-6 columns">
            <p>&copy; <?php echo date('Y') ?> Northeast Brewers + Distillers Association </p>
          </div>
          <div class="large-6 columns">
            <ul class="inline-list right">
              <li><a href="<?php echo $base_url; ?>/members">Our Members</a></li>
              <li><a href="mailto:nebdamn@gmail.com">Contact Us</a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

  </body>
</html>
