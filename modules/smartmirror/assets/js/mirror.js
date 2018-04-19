$('.pull-down').each(function() {
    var $this = $(this);
    $this.css('margin-top', $this.parent().height() - $this.height())
});

$(window).on('load', function () {
    console.log("Fade out");
    $('#loader-wrapper').fadeOut('slow');
});