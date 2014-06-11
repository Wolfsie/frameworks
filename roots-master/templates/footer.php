<footer class="content-info" role="contentinfo">
  <div class="container">
    <?php dynamic_sidebar('sidebar-footer'); ?>
    <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>

      <nav class="collapse navbar-collapse" role="navigation">
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
  </div>
</footer>

<?php wp_footer(); ?>
