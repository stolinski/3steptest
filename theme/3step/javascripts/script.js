$(document).ready(function() {

	function makeFullUrl(amount) {
		var $url = "https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=scott%2etolinski%40gmail%2ecom&lc=US&item_name=3%20Step%20Test%20Prep&amount=";
		var $end = "&currency_code=USD&no_note=0&cn=Add%20special%20instructions%20to%20the%20seller%3a&no_shipping=2&bn=PP%2dDonationsBF%3abtn_donate_SM%2egif%3aNonHosted";
		return $url + amount.toString() + $end;
	}
	function findChecked() {
		return 45;
	}
	$('#donationdl').click(function() {
		$('.paypal-form').slideToggle();
	});
	$('#donate').click(function() {
		var $val = $('.donation-fields input:checked').val();
		console.log($val);
		var $fullUrl = makeFullUrl($val)
		window.location.assign($fullUrl);
	});
	console.log(makeFullUrl(15));
});

function disableTxt() {
    document.getElementById("other").disabled = true;
}
function enableTxt() {
    document.getElementById("other").disabled = false;
}
