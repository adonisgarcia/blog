/*
 * jQuery Show Password Plugin
 * http://github.com/davist11/jQuery-Show-Password
 *
 * Copyright (c) 2010 Trevor Davis (http://trevordavis.net)
 * Dual licensed under the MIT and GPL licenses.
 * Uses the same license as jQuery, see:
 * http://jquery.org/license
 *
 * @version 0.1
 *
 * Example usage:
 * $(':password').showPassword({
 *   linkClass: 'show-password-link',
 *   linkText: 'Show',
 *   showPasswordInputClass: 'password-showing',
 *   linkRightOffset: 0,
 *   linkTopOffset: 0
 * });
 */
;(function($) {
// Add button to show password in input field
$.fn.showPassword = function(options) {
  var opts = $.extend({}, $.fn.showPassword.defaults, options);

  return this.each(function() {
    var $this = $(this),
        elPosition = $this.position(),
        elWidth = $this.outerWidth(),
        elHeight = $this.outerHeight(),
        $parent = $this.parent(),
        parentHeight = $parent.height();

    // Support for the Metadata Plugin.
    var o = $.meta ? $.extend({}, opts, $this.data()) : opts;
    
    $parent.height(parentHeight);
  
    //Create the link
    $('<a/>', {
      href: '#',
      'class': o.linkClass,
      css: {
        left: elPosition.left + elWidth,
        top: elPosition.top + elHeight
      },
      text: o.linkText
    }).appendTo($parent);
    
    var $toggleAnchor = $parent.find('.'+o.linkClass),
        toggleAnchorWidth = $toggleAnchor.outerWidth(),
        toggleAnchorLeft = parseInt($toggleAnchor.css('left'), 10),
        toggleAnchorHeight = $toggleAnchor.outerHeight(),
        toggleAnchorTop = parseInt($toggleAnchor.css('top'), 10);
        
    $toggleAnchor.css({
      'left': (toggleAnchorLeft - toggleAnchorWidth - o.linkRightOffset),
      'top': (toggleAnchorTop - toggleAnchorHeight - o.linkTopOffset)
    });
    
    //Create the input to switch
    $('<input/>', {
      'class': o.showPasswordInputClass,
      css: {
        display: 'none',
        left: elPosition.left,
        top: elPosition.top
      },
      type: 'text'
    }).appendTo($parent);
    
  });
};

// default options
$.fn.showPassword.defaults = {
  linkClass: 'show-password-link',
  linkText: 'Show',
  showPasswordInputClass: 'password-showing',
  linkRightOffset: 0,
  linkTopOffset: 0
};

})(jQuery);