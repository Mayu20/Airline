<?php
session_start();
?>
<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Select Seat </title>
	<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="css\jquery.seat-charts.css">
	<link rel="stylesheet" type="text/css" href="css\seat.css">

</head>

<body>
	<!--<div id="jquery-script-menu">
<div class="jquery-script-center">-->
	<!--
<div class="jquery-script-ads"><script type="text/javascript">
google_ad_client = "ca-pub-2783044520727903";
/* jQuery_demo */
google_ad_slot = "2780937993";
google_ad_width = 728;
google_ad_height = 90;
-->

	<script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
	</script>
	</div>
	<div class="jquery-script-clear"></div>
	</div>
	</div>
	<div class="wrapper">
		<div class="container">
			<h1>Select Seat</h1>
			<div id="seat-map">

			</div>
			<div class="booking-details">
				<h2>Booking Details</h2>
				<form action="details.php" method="post">
					<h3> Selected Seats (<span id="counter" name="counter" readonly>0</span>):</h3>
					<ul id="selected-seats">
					</ul>
					Total: <b>$<span id="total" name="total" readonly>0</span></b>
					<button class="checkout-button" name="next" onclick="window.location.href = 'details.php'">Next &raquo;</button>
					<div id="legend"></div>
			</div>
		</div>
	</div>
	<script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
	<script src="javascript\jquery.seat-charts.js"></script>
	<script>
		var firstSeatLabel = 1;

		$(document).ready(function() {
			var $cart = $('#selected-seats'),

				$counter = $('#counter'),
				$total = $('#total'),
				sc = $('#seat-map').seatCharts({
					map: [
						'ff_ff',
						'ff_ff',
						'ee_ee',
						'ee_ee',
						'ee___',
						'ee_ee',
						'ee_ee',
						'ee_ee',
						'eeeee',
					],
					seats: {
						f: {
							price: 100,
							classes: 'first-class', //your custom CSS class
							category: 'First Class'
						},
						e: {
							price: 40,
							classes: 'economy-class', //your custom CSS class
							category: 'Economy Class'
						}

					},
					naming: {
						top: false,
						getLabel: function(character, row, column) {
							return firstSeatLabel++;
						},
					},
					legend: {
						node: $('#legend'),
						items: [
							['f', 'available', 'First Class'],
							['e', 'available', 'Economy Class'],
							['f', 'unavailable', 'Already Booked']
						]
					},
					click: function() {
						if (this.status() == 'available') {
							//let's create a new <li> which we'll add to the cart items
							$('<li>' + this.data().category + ' Seat # ' + this.settings.label + ': <b>$' + this.data().price + '</b> <a href="#" class="cancel-cart-item">[cancel]</a></li>')
								.attr('id', 'cart-item-' + this.settings.id)
								.data('seatId', this.settings.id)
								.appendTo($cart);

							/*
							 * Lets update the counter and total
							 *
							 * .find function will not find the current seat, because it will change its stauts only after return
							 * 'selected'. This is why we have to add 1 to the length and the current seat price to the total.
							 */
							$counter.text(sc.find('selected').length + 1);
							$total.text(recalculateTotal(sc) + this.data().price);

							return 'selected';
						} else if (this.status() == 'selected') {
							//update the counter
							$counter.text(sc.find('selected').length - 1);
							//and total
							$total.text(recalculateTotal(sc) - this.data().price);

							//remove the item from our cart
							$('#cart-item-' + this.settings.id).remove();

							//seat has been vacated
							return 'available';
						} else if (this.status() == 'unavailable') {
							//seat has been already booked
							return 'unavailable';
						} else {
							return this.style();
						}
					}
				});

			//this will handle "[cancel]" link clicks
			$('#selected-seats').on('click', '.cancel-cart-item', function() {
				//let's just trigger Click event on the appropriate seat, so we don't have to repeat the logic here
				sc.get($(this).parents('li:first').data('seatId')).click();
			});

			//let's pretend some seats have already been booked
			sc.get(['1_2', '4_1', '7_1', '7_2']).status('unavailable');

		});

		function recalculateTotal(sc) {
			var total = 0;

			//basically find every selected seat and sum its price
			sc.find('selected').each(function() {
				total += this.data().price;
			});

			return total;
		}
	</script>
	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-36251023-1']);
		_gaq.push(['_setDomainName', 'jqueryscript.net']);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script');
			ga.type = 'text/javascript';
			ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0];
			s.parentNode.insertBefore(ga, s);
		})();
	</script>
	</form>
</body>

</html>