<!DOCTYPE HTML>

<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=8" />
<title>BLUMARKS CREATIVE STUDIO LTD</title>
<link href="<?php print base_path() . path_to_theme(); ?>/css/style.css" rel="stylesheet" type="text/css" />
<link href="<?php print base_path() . path_to_theme(); ?>/css/layout.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="<?php print base_path() . path_to_theme(); ?>/css/jquery.fancybox.css" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Lobster&v1' rel='stylesheet' type='text/css' />
<script src="http://code.jquery.com/jquery-1.7.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php print base_path() . path_to_theme(); ?>/js/swicher.js"></script>
<script type="text/javascript" src="<?php print base_path() . path_to_theme(); ?>/js/jquery.scrollTo-1.4.2-min.js"></script>
<script type="text/javascript" src="<?php print base_path() . path_to_theme(); ?>/js/blogger.js"></script>
<script type="text/javascript" src="<?php print base_path() . path_to_theme(); ?>/js/jquery.twitter.js"></script>
<script type="text/javascript" src="<?php print base_path() . path_to_theme(); ?>/js/jquery.fancybox.pack.js"></script>
<script type="text/javascript" src="<?php print base_path() . path_to_theme(); ?>/js/forms.js"></script>
<script type="text/javascript" src="<?php print base_path() . path_to_theme(); ?>/js/sprites.js"></script>
<script type="text/javascript" src="<?php print base_path() . path_to_theme(); ?>/js/scripts.js"></script>

<!--[if lt IE 8]> <div class="alc" style=' clear: both; height: 59px; padding:0 0 0 15px; position: relative;'> <a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/images/upgrade.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." /></a></div> <![endif]-->

<!--[if lt IE 9]><script src="<?php print base_path() . path_to_theme(); ?>/js/html5.js" type="text/javascript"></script><![endif]-->

<!--[if IE]><link href="<?php print base_path() . path_to_theme(); ?>/css/ie_style.css" rel="stylesheet" type="text/css" /><![endif]-->

</head>

<body>
<div id="gspinner"><img src="<?php print base_path() . path_to_theme(); ?>/images/ajax-loader.gif" alt=""></div>
<div id="glob">
  <div id="main">
    <aside>
      <h1><a href="<?php print $front_page ?>"><img src="<?php print base_path() . path_to_theme(); ?>/images/logo.png" alt=""></a></h1>
      <nav>
       <?php if ($main_menu): ?>
          <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu'))); ?>
          <?php endif; ?>        
      </nav>
    </aside>
    <article id="content">
    <div class="index-contents"> <?php print render($title_prefix); ?>
     <ul>
          <?php if ($title): ?>
          <h1><?php print $title; ?></h1>
          <?php endif; ?>
          <?php print render($title_suffix); ?> <?php print render($messages); ?>
          <?php if ($tabs): ?>
          <div class="tabs"><?php print render($tabs); ?></div>
          <?php endif; ?>
          <?php if ($action_links): ?>
          <ul class="action-links">
            <?php print render($action_links); ?>
          </ul>
          <?php endif; ?>
          <?php print render($page['content']); ?> </div>
      </ul>
    </article>
  </div>
  <footer>
    <pre class="privacy">Hippo &copy; 2011 <a href="#privacy" class="white und">Privacy Policy</a>		<!-- {%FOOTER_LINK} -->

</pre>
  </footer>
</div>
<div class="popups">
  <div id="privacy">
    <div class="inner">
      <h2>Privacy policy</h2>
      <p><span class="white">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. </span><br>
        Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenas tristique orci ac sem. Duis ultricies pharetra magna. Donec accumsan malesuada orci. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacusFusce euismod consequat ante. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Pellentesque sed dolor. Aliquam congue fermentum nisl. Mauris accumsan nulla vel diam. Sed in lacus ut enim adipiscing aliquet. Nulla venenatis. In pede mi, aliquet sit amet, euismod.</p>
      <p><span class="white">An, auctor ut, ligula. Aliquam dapibus tincidunt metus. Praesent justo dolor, lobortis quis, lobortis dignissim, pulvinar ac, lorem.</span><br>
        Vestibulum sed ante. Donec sagittis euismod purus. positions currently availableFusce euismod consequat ante. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Pellentesque sed dolor. Aliquam congue fermentum nisl. Mauris accumsan nulla 
        
        vel diam. Sed in lacus ut enim adipiscing aliquet. Nulla venenatis. In pede mi, aliquet sit amet, euismod in, auctor ut, ligula. Aliquam dapibus tincidunt metus. Praesent justo dolor, lobortis quis, lobortis dignissim, pulvinar ac, lorem. Vestibulum sed ante. Donec sagittis euismod purus. positions currently availableFusce euismod consequat ante. Lorem ipsum dolor sit amet.</p>
      <p><span class="white">Fusce euismod consequat ante. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Pellentesque sed dolor. </span><br>
        Aliquam congue fermentum nisl. Mauris accumsan nulla vel diam. Sed in lacus ut enim adipiscing aliquet. Nulla venenatis. In pede mi, aliquet sit amet, euismod in, auctor ut, ligula. Aliquam dapibus tincidunt metus. Praesent justo dolor, lobortis quis, lobortis dignissim, pulvinar ac, lorem. Vestibulum sed ante. Donec sagittis euismod purus. positions currently availablepulvinar ac, lorem. Vestibulum sed ante. Donec sagittis euismod purus. positions currently available Fusce euismod consequat ante. dolor sit amet, consectetuer adipiscing elit. Pellentesque sed dolor. Aliquam congue fermentum nisl. Mauris accumsan null. </p>
      <p><span class="white">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Pellentesque sed dolor. Aliquam congue fermentum nisl. </span><br>
        Mauris accumsan nulla vel diam. Sed in lacus ut enim adipiscing aliquet. Nulla venenatis. In pede mi, aliquet sit amet, euismod in, auctor ut, ligula. Aliquam dapibus tincidunt metus. Praesent justo dolor, lobortis quis, lobortis dignissim, pulvinar ac, lorem. Vestibulum sed ante. Donec sagittis euismod purus. positions currently availableLorem ipsum dolor sit amet, consectetuer adipiscing elit. Pellentesque sed dolor. Aliquam congue fermentum nisl. Mauris accumsan nulla vel diam. Sed in lacus ut enim adipiscing aliquet. Nulla venenatis. In pede mi, aliquet sit amet, euismod in, auctor ut, ligula. Aliquam dapibus tincidunt metus. </p>
      <p><a href="#" class="und">privacy@demolink.org</a></p>
    </div>
  </div>
</div>
<script type="text/javascript">

$('#glob').height('100%')

</script> 

<!--coded by pleazkin-->

</body>
</html>