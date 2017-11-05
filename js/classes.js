/**
 * Theme functions file
 *
 * Contains handlers for navigation, accessibility, header sizing
 * footer widgets and Featured Content slider
 *
 */
;(function($) {
  $(window).load(function() {
    var body = $('body'),
      _window = $(window),
      $classes = $('article#Classes'),
      day = getQueryVariable('day')
      meditation_class = getQueryVariable('class');

    if(day !== false) {
      $classes.find('.active').removeClass('active');

      var destination = $classes.offset().top - 100,
        activeDay = 
          (day !== undefined) ? 
            $('a').filter(function(index) { return $(this).text() === day.concat("s"); }) :
            null,
        activeClass = 
          (meditation_class !== undefined) ? 
            $('a').filter(function(index) { return $(this).text() === meditation_class.replace(/%20/g, " ") }) :
            null ;
      
      if(activeDay[0] !== undefined) simulateClick(activeDay[0]);
      if(activeDay[0] !== undefined)  simulateClick(activeClass[0]);
      $('html,body').animate({ scrollTop: destination}, 500);
    }

    function getQueryVariable(variable) {
          var query = window.location.search.substring(1);
          var vars = query.split("&");
          for (var i=0;i<vars.length;i++) {
                  var pair = vars[i].split("=");
                  if(pair[0] == variable){return pair[1];}
          }
          return(false);
    }

    function simulateClick(elem) {
      // Create our event (with options)
      var evt = new MouseEvent('click', {
          bubbles: true,
          cancelable: true,
          view: window
      });
      // If cancelled, don't dispatch our event
      var canceled = !elem.dispatchEvent(evt);
  };
  }) //window.load
})(jQuery)