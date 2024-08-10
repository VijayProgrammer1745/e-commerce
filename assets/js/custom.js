$(function () {
	$(".auth").submit(function(e) {
		e.preventDefault();

		var $this = $(this), data = $this.serialize(), url = $this.attr('action');

		$.ajax({
			type: 'POST',
			url: url,
			data: data,
			dataType: 'json',
			success: function (d) {
				if (d.status) {
					window.location.href = d.message;
				} else {
					alert(d.message);
				}
			}
		});
	});

	$('.discount').click(function (e) {
		e.preventDefault();

		var $this = $(this), url = $this.attr('href'), discountId = $this.data('discount_id');
		$.ajax({
			type: 'POST',
			url: url,
			data: {
				discountId: discountId
			},
			dataType: 'json',
			success: function (d) {
				if (d.status) {
					window.location.reload();
				}
			}
		});
	});

	// Search
	$('.search-input').keyup(function (e) {
		var q = $(this).val();
		var $searchBox = $('.search-box');
		if (q != '') {
			$searchBox.addClass('show');
			$.ajax({
				type: 'GET',
				url: 'search.php',
				data: {
					q: $(this).val(),
				},
				dataType: 'json',
				success: function(d) {
					$searchBox.html(d.data);
					console.log(d);
				},
			});
		} else {
			$searchBox.removeClass('show');
		}
	});
});