$(function () {
  $('.btn1').on('click', function () {

    $.fancybox.open($('[data-fancybox="images"]'), {
      thumbs: {
        autoStart: true,
        protect: false,
        infobar: true,
        buttons: [
          "zoom",
          "share",
          "slideShow",
          "fullScreen",
          "download",
          "thumbs",
          "close"

        ],
        
        caption: function (instance, item) {
          var caption = $(this).data('caption') || '';

          return (caption.length ? caption + '<br />' : '') + 'Image <span data-fancybox-index></span> of <span data-fancybox-count></span>';
        }
      }
    });
  });

});
