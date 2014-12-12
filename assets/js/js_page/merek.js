var SITE_URL = $('#site-url').val();
var BASE_URL = $('#base-url').val();

$('#add-merek')
	.off('click', '#add-merek-submit')
	.on('click', '#add-merek-submit', function (event) {
		
		var data_merek = {
			nama : $('#add-merek').find('#add-merek-nama').val(),
			keterangan : $('#add-merek').find('#add-merek-keterangan').val(),
		};

		$.ajax({
			url: SITE_URL + 'merek/insert',
			type: 'POST',
			dataType: 'json',
			data: data_merek,
		}).done(function(response) {
			
			if (response.status) {
				$('#add-merek').find('.alert').removeClass('alert-danger').addClass('alert-success');
				$('#add-merek').find('.message').html(response.message)
			} else {
				$('#add-merek').find('.alert').removeClass('alert-success').addClass('alert-alert');
				$('#add-merek').find('.message').html(response.message)
			};

			$('#add-merek').find('.alert').slideToggle().delay(5000).queue(function(n) {
			  	$(this).slideToggle().delay(500).queue(function(n) {
				  	$('#add-merek').modal('hide');
			  	}); n();

			  	// reset field 
			  	$('#add-merek').find('#add-merek-nama').val('');
			  	$('#add-merek').find('#add-merek-keterangan').val('');
			});
		});
	});

$('#edit-merek')
	.off('click', '#edit-merek-submit')
	.on('click', '#edit-merek-submit', function (event) {
		
		var data_merek = {
			id : $('#edit-merek').find('#edit-merek-id').val(),
			nama : $('#edit-merek').find('#edit-merek-nama').val(),
			keterangan : $('#edit-merek').find('#edit-merek-keterangan').val(),
		};

		$.ajax({
			url: SITE_URL + 'merek/edit',
			type: 'POST',
			dataType: 'json',
			data: data_merek,
		}).done(function(response) {
			
			if (response.status) {
				$('#edit-merek').find('.alert').removeClass('alert-danger').addClass('alert-success');
				$('#edit-merek').find('.message').html(response.message)
			} else {
				$('#edit-merek').find('.alert').removeClass('alert-success').addClass('alert-alert');
				$('#edit-merek').find('.message').html(response.message)
			};

			$('#edit-merek').find('.alert').slideToggle().delay(5000).queue(function(n) {
			  	$(this).slideToggle().delay(500).queue(function(n) {
				  	$('#edit-merek').modal('hide');
			  	}); n();

			  	// reset field 
			  	$('#edit-merek').find('#edit-merek-id').val('');
			  	$('#edit-merek').find('#edit-merek-nama').val('');
			  	$('#edit-merek').find('#edit-merek-keterangan').val('');
			});
		});
	});

$('table')
	.off('click', '.edit-merek-edit')
	.on('click', '.edit-merek-edit', function() {
		var id 			= $(this).attr('data-id'),
			nama 		= $(this).closest('tr').find('td').eq(1).text(),
			deskripsi 	= $(this).closest('tr').find('td').eq(2).text();

		$('#edit-merek').find('#edit-merek-id').val(id);
		$('#edit-merek').find('#edit-merek-nama').val(nama);
		$('#edit-merek').find('#edit-merek-keterangan').val(deskripsi);
	});

$('table')
	.off('click', '.delete-merek-delete')
	.on('click', '.delete-merek-delete', function() {
		var id 			= $(this).attr('data-id');

		$('#delete-merek-submit').attr('data-id', id);
	});

$('#delete-merek')
	.off('click', '#delete-merek-submit')
	.on('click', '#delete-merek-submit', function() {

		var data_merek = {
			id : $(this).attr('data-id'),
		};

		$.ajax({
			url: SITE_URL + 'merek/delete',
			type: 'POST',
			dataType: 'json',
			data: data_merek,
		}).done(function(response) {
			
			if (response.status) {
				$('#edit-merek').find('.alert').removeClass('alert-danger').addClass('alert-success');
				$('#edit-merek').find('.message').html(response.message)
			} else {
				$('#edit-merek').find('.alert').removeClass('alert-success').addClass('alert-alert');
				$('#edit-merek').find('.message').html(response.message)
			};

			$('#edit-merek').find('.alert').slideToggle().delay(5000).queue(function(n) {
			  	$(this).slideToggle().delay(500).queue(function(n) {
				  	$('#edit-merek').modal('hide');
			  	}); n();

			  	// reset field 
			  	$('#edit-merek').find('#edit-merek-id').val('');
			  	$('#edit-merek').find('#edit-merek-nama').val('');
			  	$('#edit-merek').find('#edit-merek-keterangan').val('');
			});
		});
	});



