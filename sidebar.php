<div id="sidebar">
  <div class="wrap clearfix">
    <?php for($i = 1; $i <= 3; $i++): ?>
      <div class="module">
        <ul>
          <?php function_exists('dynamic_sidebar') ? dynamic_sidebar($i) : null ?>
        </ul>
      </div>    
    <?php endfor; ?>
	</div>
</div>