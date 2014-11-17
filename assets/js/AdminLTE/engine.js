(function($) { 
    $.fn.plugin = function(){
        
    }
})(jQuery);

var APP = function(app, $) {
    // this is global variables 
    app = {
        BASE_URL: "localhost",
        SITE_URL: "localhost/index.php",
        windowH: $(window).height(),
        windowW: $(window).width(),

    };

    app.init = function() {
        var self = this;
        self.setupController();
        self.clickController();
        self.hoverController();

        return self;
    };

    app.setupController = function() {
        // place this to setup page using javascript 
    };

    app.clickController = function() {
        $('.parent')
            .off('click', '.someClass')
            .on('click', '.someClass', app.someClick);
    };

    app.hoverController = function() {

    };

    app.Controller = function() {

    };

    // event functions 
    app.someClick = function() {
        console.log('jajal');
    };

    return app;

}(APP || {}, jQuery);

APP.init();