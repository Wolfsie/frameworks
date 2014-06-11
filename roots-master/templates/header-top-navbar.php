<header class="banner navbar navbar-default navbar-static-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a>
    </div>

    <nav class="collapse navbar-collapse alignright" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
        endif;
      ?>
      <ul class="nav navbar-nav">
        <li class="icon-fonts">
          <a href="http://facebook.com/amanda.muir.965">
          <i class="fa fa-linkedin"></i>
          <span class="nav-underline"></span>          
          </a>
        </li>
        <li class="icon-fonts">
          <a href="http://github.com/wolfsie">
          <i class="fa fa-github-alt"></i>
          <span class="nav-underline"></span>          
          </a>
        </li>
        <li class="icon-fonts">
          <a href="http://facebook.com/amanda.muir.965">
          <i class="fa fa-facebook"></i>
          <span class="nav-underline"></span>          
          </a>
        </li>
        <li class="icon-fonts">
          <a href="http://facebook.com/amanda.muir.965">
          <i class="fa fa-twitter"></i>
          <span class="nav-underline"></span>          
          </a>
        </li>
        <li class="icon-fonts">
          <a href="http://facebook.com/amanda.muir.965">
          <i class="fa fa-google-plus"></i>
          <span class="nav-underline"></span>          
          </a>
        </li>
      </ul>
    </nav>

  </div>
</header>
