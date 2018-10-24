/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */




(function($){
  
    $('.tab-links').each(function() {

        var $this = $(this);
        var $tab = $this.find('li.active');
        var $link = $tab.find('a');
        var $panel = $($link.attr('href'));
    
        $this.on('click', '.tab-control', function(e) {
            e.preventDefault();
            var $link = $(this);
            var id = this.hash;
    
            if (id && !$link.is('.active')) {
                $panel.removeClass('active');
                $tab.removeClass('active');
    
                $panel = $(id).addClass('active');
                $tab = $link.parent().addClass('active');
            }
        });
    
     });

    


})(jQuery);