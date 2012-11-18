/* ---------------------------------------------------------------------
Global JavaScript

Target Browsers: All
Authors: **withheld**
------------------------------------------------------------------------ */

// Namespace Object
var NERD = NERD || {};

// Pass reference to jQuery and Namespace
(function($, APP) {

    // DOM Ready Function
    $(function() {
        APP.HasJS.init();
        APP.AutoReplace.init();
        APP.SimpleCarousel.init();
    });

/* ---------------------------------------------------------------------
HasJS
Author: Boilerplate

Replaces "no-js" class with "js" on the html element if JavaScript
is present. This allows you to style both the JavaScript enhanced
and non JavaScript experiences.
------------------------------------------------------------------------ */
APP.HasJS = {
    init: function() {
        $('html').removeClass('no-js').addClass('js');
    }
};

/* ---------------------------------------------------------------------
AutoReplace
Author: Boilerplate

Mimics HTML5 placeholder behavior in browsers that do not support it.

Additionally, adds and removes 'placeholder-text' class, used as a styling
hook for when placeholder text is visible or not visible

Additionally, sets the field value to the empty string upon form submission
if the current value is the default text
------------------------------------------------------------------------ */
APP.AutoReplace = {
    $fields: undefined,

    init: function() {
        // Only run the script if 'placeholder' is not natively supported
        if ('placeholder' in document.createElement('input')) {
            return;
        }

        this.$fields = $('[placeholder]');
        this.bind();
    },

    bind: function() {
        this.$fields.each(
            function() {
                var $this = $(this);
                var defaultText = $this.attr('placeholder');

                if ($this.val() === '' || $this.val() === defaultText) {
                    $this.addClass('placeholder-text').val(defaultText);
                }

                $this.off('.autoreplace');

                $this.on(
                    'focus.autoreplace',
                    function() {
                        if ($this.val() === defaultText) {
                            $this.val('').removeClass('placeholder-text');
                        }
                    }
                );

                $this.on(
                    'blur.autoreplace',
                    function() {
                        if ($this.val() === '' || $this.val() === defaultText) {
                            $this.val(defaultText).addClass('placeholder-text');
                        }
                    }
                );

                $this.parents('form').off('submit.autoreplace').on(
                    'submit.autoreplace',
                    function() {
                        if ($this.val() == defaultText) {
                            $this.val('');
                        }
                    }
                );
            }
        );
    }
};

/* ---------------------------------------------------------------------
SimpleCarousel
Author: **withheld**

Controls and slide animation for a simple carousel.
------------------------------------------------------------------------ */
APP.SimpleCarousel = {

    currentSlide: 0,
    numSlides: undefined,
    $carousel: undefined,
    $controls: undefined,
    $slides: undefined,
    timer: undefined,

    init: function() {
        var self = this;
        var $carousel = $('#js-carousel');
        if (!$carousel.length) {
            return;
        }
        this.$carousel = $carousel;
        this.$controls = this.$carousel.find('.carousel-nav-item');
        this.$slides = this.$carousel.find('.slide');
        this.$controls.eq(0).addClass('active');
        this.$slides.hide().eq(0).show();
        this.numSlides = this.$slides.length;

        this.startSlideshow();

        $carousel.hover(
            function() {
                self.stopSlideshow();
            },
            function() {
                self.startSlideshow();
            }
        );

        this.bind();
    },

    bind: function () {
        var self = this;

        this.$controls.click(function(e) {
            e.preventDefault();
            var index = $(this).parent().index();
            self.showSlide(index);
        });

    },

    showSlide: function(index) {

        this.$controls.removeClass('active');
        this.$controls.eq(index).addClass('active');
        this.$slides.fadeOut('slow');
        this.$slides.eq(index).fadeIn('slow');
        this.currentSlide = index;
    },

    showNextSlide: function() {
        if(this.currentSlide + 1 < this.numSlides) {
            this.showSlide(this.currentSlide + 1);
        } else {
            this.showSlide(0);
        }
    },

    startSlideshow: function() {
        var self = this;
        this.timer = setInterval(function() {
            self.showNextSlide();
        }, 4000);
    },

    stopSlideshow: function() {
        clearInterval(this.timer);
    }
};

}(jQuery, NERD));