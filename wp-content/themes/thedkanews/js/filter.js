jQuery(document).ready(function ($) {
  $(".clear-filter").on("click", function (e) {
    e.preventDefault();

    var categoryID = $(".accordion-filter").data("category-id");

    $('input[name="fl-supplier"]').prop("checked", false);
    $('input[name="fl-product"]').prop("checked", false);

    var product_list_ele = $(".product-rang-wrap");
    product_list_ele.html(" ");

    $(".product-loader").hide();
    // Show loader and hide "Load More" button
    let loadign = $(".filter-loader").show();

    if ($(loadign).is(":visible")) {
      $(".product_view_more").hide();
    }

    filter_Product(categoryID);
  });

  $('input[name="fl-supplier"], input[name="fl-product"]').on(
    "change",
    function () {
      // Show loader and hide "Load More" button
      $(".filter-loader").show();
      $(".product_view_more").hide();

      var selectedSuppliers = [];
      $('input[name="fl-supplier"]:checked').each(function () {
        selectedSuppliers.push($(this).val());
      });

      var selectedProducts = [];
      $('input[name="fl-product"]:checked').each(function () {
        selectedProducts.push($(this).val());
      });

      var categoryID = $(".accordion-filter").data("category-id");
      filter_Product(categoryID, selectedSuppliers, selectedProducts);
    }
  );

  function filter_Product(
    categoryID,
    selectedSuppliers = [],
    selectedProducts = []
  ) {
    $.ajax({
      type: "POST",
      url: filter.ajax_url,
      data: {
        action: "filter_posts",
        term_id: categoryID,
        suppliers: selectedSuppliers,
        products: selectedProducts,
      },
      success: function (response) {
        $(".product-rang-wrap").empty().append(response);
        var max_page = parseInt($("#max_num").val());
        page = 1;
        if (isNaN(max_page) || page >= max_page) {
          // Hide "Load More" button only if the loader is visible
          if ($(".filter-loader").is(":visible")) {
            $(".product_view_more").hide();
          }
        } else {
          $(".product_view_more").show();
        }
      },
      complete: function () {
        // Hide loader after completing the AJAX request
        $(".product-loader").hide();
        $(".filter-loader").hide();
      },
    });
  }

  $('input[name="fl-supplier"], input[name="fl-product"]').change(function () {
    page = 1;
    var max_page = parseInt($("#max_num").val());
    if (page < max_page) {
      // Show "Load More" button only if the loader is not visible
      if (!$(".filter-loader").is(":visible")) {
        $(".product_view_more").show();
      }
    }
  });

  function removeShowClassOnMobile() {
    var mobileBreakpoint = 768; // Adjust this value as needed

    if ($(window).width() < mobileBreakpoint) {
      $(".accordion-collapse").removeClass("show");
      $(".accordion-button")
        .addClass("collapsed")
        .css("transform", "rotate(0deg)");
      $(".accordion-button::after").css("transform", "rotate(-90deg)");
    }
  }

  // Run on page load
  removeShowClassOnMobile();

  // Run on window resize
  //$(window).resize(removeShowClassOnMobile);

  $("#more_blogs").on("click", function (e) {
    e.preventDefault();
    jQuery(".product-loader").show();
    jQuery("#more_blogs").hide();
    var current_page = jQuery("#acousticoffice_blog_posts_page_id").val();
    // var cat_name = jQuery("#thedkanews_blog_posts_cat_name").val();
    var new_current_page = parseInt(current_page) + 1;
    jQuery("#acousticoffice_blog_posts_page_id").val(new_current_page);
    jQuery.ajax({
      type: "post",
      url: filter.ajax_url,
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
