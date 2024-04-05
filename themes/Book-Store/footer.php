<footer>
    <!-- First widget  -->
      <section class="top-footer">
        <div class="first widget-area">
          <a href="<?php echo esc_url( home_url() );?>">
            <?php dynamic_sidebar( 'footer-widget-area-one' ); ?>
          </a>
        </div>   
        <!-- Second Widget  -->
        <div class="second quarter widget-area">
          <?php dynamic_sidebar( 'footer-widget-area-two' ); ?>
        </div>
      </section>
    </footer>
  </body>
</html>