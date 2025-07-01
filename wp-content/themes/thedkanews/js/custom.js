jQuery(document).ready(function ($) {
  let page = 1;

  $("#load-more-news").on("click", function () {
    const $button = $(this);

    page++;

    $.ajax({
      url: news_ajax_obj.ajax_url,
      type: "POST",
      data: {
        action: "load_more_news",
        page: page,
        security: news_ajax_obj.ajax_nonce,
      },
      beforeSend: function () {
        $button.text("Loading...");
      },
      success: function (res) {
        if (res.success) {
          $("#news-posts").append(res.data.html);
          $button.text("Load More");

          // Hide button if we've reached the last page
          if (page >= res.data.max_page) {
            $button.hide();
          }
        } else {
          $button.hide(); // Hide if no posts returned
        }
      },
      error: function () {
        $button.text("Error");
      },
    });
  });

  // archive page load more
  $("#more_blogs").on("click", function (e) {
    e.preventDefault();
    jQuery(".product-loader").show();
    jQuery("#more_blogs").hide();
    var current_page = jQuery("#thedkanews_blog_posts_page_id").val();
    var new_current_page = parseInt(current_page) + 1;
    jQuery("#thedkanews_blog_posts_page_id").val(new_current_page);
    jQuery.ajax({
      type: "post",
      url: news_ajax_obj.ajax_url,
      data: jQuery("#meta_filter_form").serialize(),
      success: function (response) {
        jQuery(".product-loader").hide();
        jQuery("#more_blogs").show();
        jQuery("#blog_post_data").append(response.pagination_data_blog);
        if (response.max_num_page == new_current_page) {
          jQuery(".loadmore-btn").attr("style", "display: none !important");
        }
      },
    });
  });
});
