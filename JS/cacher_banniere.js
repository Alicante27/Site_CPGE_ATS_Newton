if (localStorage.getItem('cookieSeen') != 'valider') {
		$('.cookie-banner').delay(300).fadeIn();
	};$('.cookie_button').click(function() {
		$('.cookie-banner').fadeOut();
		localStorage.setItem('cookieSeen','valider')
	})
