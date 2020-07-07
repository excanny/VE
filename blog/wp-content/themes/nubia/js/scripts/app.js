(function($) {

  'use strict';

  // =====================
  // Post Card Images Fade
  // =====================

  $('.js-fadein, .wp-post-image').viewportChecker({
    classToAdd: 'is-inview', // Class to add to the elements when they are visible
    offset: 100,
    removeClassAfterAnimation: true
  });

  // =====================
  // Responsive videos
  // =====================

  $('.c-content, .comment-content').fitVids({
    'customSelector': [ 'iframe[src*="ted.com"]'          ,
                        '[src*="videopress.com"]'         ,
                        'iframe[src*="facebook.com"]'     ,
                        'iframe[src*="player.twitch.tv"]' ,
                        'iframe[src*="dailymotion.com"]'
                      ]
  });

  // =====================
  // Off Canvas menu
  // =====================

  $('.js-off-canvas-toggle').click(function(e) {
    e.preventDefault();
    $('.js-off-canvas-content, .js-off-canvas-container').toggleClass('is-active');
  });

  // =====================
  // Search
  // =====================

  var search_field = $('.js-search-input'),
      toggle_search = $('.js-search-toggle');

  toggle_search.click(function(e) {
    e.preventDefault();
    $('.js-search').addClass('is-active');

    // If off-canvas is active, just disable it
    $('.js-off-canvas-container').removeClass('is-active');

    setTimeout(function() {
      search_field.focus();
    }, 500);
  });

  $('.c-search, .js-search-close, .js-search-close .icon').on('click keyup', function(event) {
    if (event.target == this || event.target.classList.contains('js-search-close') || event.target.classList.contains('icon') || event.keyCode == 27) {
      $('.c-search').removeClass('is-active');
    }
  });

  // =====================
  // Instagram Feed
  // =====================

  if ($('#instafeed-post').length) {
    var instagramFeedPost = new Instafeed({
      get: 'user',
      target: 'instafeed-post',
      limit: nubia_instagram_widget_config.limit,
      resolution: 'thumbnail',
      userId: nubia_instagram_widget_config.userId,
      accessToken: nubia_instagram_widget_config.accessToken,
      template:
        '<div class="c-widget-instagram__item"><a href="{{link}}" title="{{caption}}" aria-label="{{caption}}" target="_blank"><img src="{{image}}" class="c-widget-instagram__image" alt="{{caption}}"></a></div>'
    });

    instagramFeedPost.run();
  }

  if ($('#instafeed-footer').length) {
    var instagramFeedFooter = new Instafeed({
      get: 'user',
      target: 'instafeed-footer',
      limit: nubia_instagram_widget_config.limit,
      resolution: 'thumbnail',
      userId: nubia_instagram_widget_config.userId,
      accessToken: nubia_instagram_widget_config.accessToken,
      template:
        '<div class="c-widget-instagram__item"><a href="{{link}}" title="{{caption}}" aria-label="{{caption}}" target="_blank"><img src="{{image}}" class="c-widget-instagram__image" alt="{{caption}}"></a></div>'
    });

    instagramFeedFooter.run();
  }

  // =====================
  // Ajax Load More
  // =====================

  var nubia_load_posts_button = $('.js-load-posts'),
      nubia_page_number_next  = nubia_config.nubia_page_number_next,
      nubia_page_link_next    = nubia_config.nubia_page_link_next;

  nubia_load_posts_button.click(function(e) {
    e.preventDefault();

    var nubia_next_link = nubia_page_link_next.replace('9999999999', nubia_page_number_next);

    $.ajax({
      url: nubia_next_link,
      beforeSend: function() {
        nubia_load_posts_button.text(nubia_config.nubia_loading);

        nubia_load_posts_button.addClass('c-btn--loading');
      }
    }).done(function(data) {
      var posts = $('.js-post-card-wrap', data);

      nubia_load_posts_button.text(nubia_config.nubia_load_more);
      nubia_load_posts_button.removeClass('c-btn--loading');

      $('.js-grid').append(posts);

      $('.js-fadein').viewportChecker({
        classToAdd: 'is-inview',
        offset: 100,
        removeClassAfterAnimation: true
      });

      nubia_page_number_next++;

      // If you are on the last pagination page, hide the load more button
      if (nubia_page_number_next > nubia_config.nubia_page_number_max) {
        nubia_load_posts_button.addClass('c-btn--disabled').attr('disabled', true);
      }
    });
  });

})(jQuery);