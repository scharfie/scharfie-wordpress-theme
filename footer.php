    </div>
  </div>  

  <?php get_sidebar(); ?>

  <?php if (0): ?>
  <div id="footer">
    <div class="wrap">
    	<p>
    		<?php bloginfo('name'); ?> is powered by
    		<a href="http://wordpress.org/">WordPress</a>
    		<br /><a href="<?php bloginfo('rss2_url'); ?>">Entries (RSS)</a>
    		and <a href="<?php bloginfo('comments_rss2_url'); ?>">Comments (RSS)</a>.
    	</p>
    </div>
  </div>
  <?php endif; ?>
</div>
<?php wp_footer(); ?>
</body>
</html>
