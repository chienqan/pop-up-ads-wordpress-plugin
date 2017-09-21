<style type="text/css">
.wppads-ads-container {
  position: relative;
}
.wppads-ads-button {
  display: block;
  background: rgba(0,0,0,0.4);
  position: absolute;
  z-index: 10000;
  // right: 100%;
  top: 0;
  left: 0;
  width: 24px;
  height: 24px;
  text-align: center;
  color: #fff;
}
.wppads-ads-button:hover {
  color: #fff;
}
.wppads-ads-button img {
  width: 24px;
  height: 24px;
  padding: 6px;
}
#wppads-bottom-right-ads {
  position: fixed;
  z-index: 10000;
  bottom: 0;
  right: 0;
  max-width: 300px;
  height: auto;
}
</style>
<div id="wppads-bottom-right-ads" class="wppads-ads">
  <div class="wppads-ads-container">
    <div class="wppads-ads-content">
      <?= stripslashes_deep($wppads_script) ?>
    </div>
  </div>
</div>
<script>
(function($) {
  "use strict";

  $(document).ready(function() {
    $('.wppads-ads-close').on('click', function(e) {
      e.preventDefault();
      var $close = $(this);
      var $open = $close.prev();
      var $adsWrapper = $('#wppads-bottom-right-ads');
      var w = $adsWrapper.width();

      $close.hide();
      $open.show();
      $adsWrapper.animate({
        'right': '-' + w,
      });
    });

    $('.wppads-ads-open').on('click', function(e) {
      e.preventDefault();
      var $open = $(this);
      var $close = $open.next();
      var $adsWrapper = $('#wppads-bottom-right-ads');
      var w = $adsWrapper.width();

      $close.show();
      $open.hide();
      $adsWrapper.animate({
        'right': 0,
      });
    });
  });
})(jQuery);
</script>