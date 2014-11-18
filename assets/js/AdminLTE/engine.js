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
        $('#tanggal-beli').datepicker({format: 'mm/dd/yyyy HH:mm'});

        $('#data-transaksi').slimScroll({
            height: '250px'
        });
        $('.transaksi').fixedHeaderTable({ height: 230});
        // auto complete 
        // $('.search-barcode').typeahead({
        //     source : {'test' : 'jajja'}
        // });
    };

    app.clickController = function() {
        $('.parent')
            .off('click', '.someClass')
            .on('click', '.someClass', app.someClick);
		
        $('.transaksi')
            .off('click', 'tr')
            .on('click', 'tr', app.updateField);

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

	app.updateField = function(e) {
        var id = $(this).attr('data-id'),
            popup = $('#update-field'),
            index = $(e.target).index(),
            val = $(e.target).html();

        switch(index) {
            case 4:
                popup.find('label').html('Harga beli');
                popup.find('#field').attr('name', 'harga-beli').val(val);
                popup.modal('show');
                break;
            case 5:
                popup.find('label').html('Harga jual');
                popup.find('#field').attr('name', 'harga-jual').val(val);
                popup.modal('show');
                break;
            case 6:
                popup.find('label').html('Stok masuk');
                popup.find('#field').attr('name', 'stok-masuk').val(val);
                popup.modal('show');
                break;
            case 8:
                popup.find('label').html('Letak gudang');
                popup.find('#field').attr('name', 'letak-gudang').val(val);
                popup.modal('show');
                break;
            case 9:
                popup.find('label').html('Potongan harga');
                popup.find('#field').attr('name', 'potongan-harga').val(val);
                popup.modal('show');
                break;
        }
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