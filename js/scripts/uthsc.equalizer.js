/**
 * Duplicates the foundation equalizer component so it can be used in multiple places
 * Gets concatenated in to /bower_components/foundation/js/foundation.js
 */

;(function ($, window, document, undefined) {
  'use strict';

  Foundation.libs.uthscequalizer = {
    name : 'uthscequalizer',

    version : '5.4.7',

    settings : {
      use_tallest: true,
      before_height_change: $.noop,
      after_height_change: $.noop,
      equalize_on_stack: false
    },

    init : function (scope, method, options) {
      Foundation.inherit(this, 'image_loaded');
      this.bindings(method, options);
      this.reflow();
    },

    events : function () {
      this.S(window).off('.uthscequalizer').on('resize.fndtn.uthscequalizer', function(e){
        this.reflow();
      }.bind(this));
    },

    equalize: function(uthscequalizer) {
      var isStacked = false,
          vals = uthscequalizer.find('[' + this.attr_name() + '-watch]:visible'),
          settings = uthscequalizer.data(this.attr_name(true)+'-init');

      if (vals.length === 0) return;
      var firstTopOffset = vals.first().offset().top;
      settings.before_height_change();
      uthscequalizer.trigger('before-height-change').trigger('before-height-change.fndth.uthscequalizer');
      vals.height('inherit');
      vals.each(function(){
        var el = $(this);
        if (el.offset().top !== firstTopOffset) {
          isStacked = true;
        }
      });

      if (settings.equalize_on_stack === false) {
        if (isStacked) return;
      };

      var heights = vals.map(function(){ return $(this).outerHeight(false) }).get();

      if (settings.use_tallest) {
        var max = Math.max.apply(null, heights);
        vals.css('height', max);
      } else {
        var min = Math.min.apply(null, heights);
        vals.css('height', min);
      }
      settings.after_height_change();
      uthscequalizer.trigger('after-height-change').trigger('after-height-change.fndtn.uthscequalizer');
    },

    reflow : function () {
      var self = this;

      this.S('[' + this.attr_name() + ']', this.scope).each(function(){
        var $eq_target = $(this);
        self.image_loaded(self.S('img', this), function(){
          self.equalize($eq_target)
        });
      });
    }
  };
})(jQuery, window, window.document);
