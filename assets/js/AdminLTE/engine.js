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

        $('.content')
            .off('click', '.add-barang')
            .on('click', '.add-barang', app.addBarang);

        $('.content')
            .off('click', '.close-add-barang')
            .on('click', '.close-add-barang', app.closeAddBarang);
    };

    app.hoverController = function() {

    };

    app.Controller = function() {

    };

    // event functions 
    app.someClick = function() {
        console.log('jajal');
    };

    app.addBarang =  function() {
        $(this).addClass('spin');
        $(this).animate({'color':'#d9534f'}, 600, function () {
            $(this).removeClass('spin');
        });
        $(this).closest('.content').find('.add-form').css({'opacity':'0', "left" : "-120%"});
        $(this).closest('.content').find('.add-form').removeClass('hide');
            $(this).closest('.content').find('.add-form').animate({"opacity":'1'}, function(){
                $(this).animate({"left":'0'}, 600);
            });
        $(this).removeClass('add-barang').removeClass('glyphicon-plus');
        $(this).addClass('glyphicon-remove close-add-barang');
    };

    app.closeAddBarang =  function() {
        $(this).closest('.content').find('.add-form').animate({"left":'-120%'}, 500, function() {
            $(this).addClass('hide');
        });
        $(this).removeClass('close-add-barang').removeClass('glyphicon-remove');
        $(this).addClass('glyphicon-plus add-barang');

        $(this).addClass('spin');
        $(this).animate({'color':'#428bca'}, 600, function () {
            $(this).removeClass('spin');
        });
    };  

    return app;

}(APP || {}, jQuery);

APP.init();