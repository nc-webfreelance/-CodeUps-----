<div class="breadcrumb <?php if(is_404()){ echo 'breadcrumb--white';} ?>">
  <div class="breadcrumb__inner inner">
    <?php if (function_exists('bcn_display')) {
      bcn_display();
    } ?>
  </div>
</div>