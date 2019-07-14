$(document).ready(function() {
  var userFeed = new Instafeed({
    get: "user",
    userId: "10369221",
    limit: 12,
    resolution: "standard_resolution",
    accessToken: "10369221.1677ed0.54103aa4f2914ca394f02b64642068c7",
    sortBy: "most-recent",
    template:
      '<div class="col-lg-4 instaimg"><a href="{{image}}" title="{{caption}}" target="_blank"><img src="{{image}}" alt="{{caption}}" class="img-fluid"/></a></div>'
  });

  userFeed.run();

  // This will create a single gallery from all elements that have class "gallery-item"
  $(".gallery").magnificPopup({
    type: "image",
    delegate: "a",
    gallery: {
      enabled: true
    }
  });

  $(document).ready(function() {
    $(".popup-gallery").magnificPopup({
      delegate: "a",
      type: "image",
      tLoading: "Loading image #%curr%...",
      mainClass: "mfp-img-mobile",
      gallery: {
        enabled: true,
        navigateByImgClick: true,
        preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
      },

      template:
        '<div class="col-lg-3 instaimg"><a href="{{image}}" title="{{caption}}" target="_blank"><img src="{{image}}" alt="{{caption}}" class="img-fluid"/></a></div>',
      image: {
        tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
        titleSrc: function(item) {
          return item.el.attr("title") + "<small>by Marsel Van Oosten</small>";
        }
      }
    });
  });
});
