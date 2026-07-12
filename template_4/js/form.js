$(function() {

	// Get the form.
	var form = $('#ajax-contact');

	// Get the messages div.
	var formMessages = $('#form-messages');

	// Set up an event listener for the contact form.
	$(form).submit(function(e) {
		// Stop the browser from submitting the form.
		e.preventDefault();

		// Serialize the form data.
		var formData = $(form).serialize();

		// Submit the form using AJAX.
		$.ajax({
			type: 'POST',
			url: $(form).attr('action'),
			data: formData
		})
		.done(function(response) {
			// Make sure that the formMessages div has the 'success' class.
			$(formMessages).removeClass('bg-danger');
			$(formMessages).addClass('bg-success');

			// Set the message text.
			$(formMessages).text('Uw bericht is succesvol verzonden');

			// Clear the form.
			$('#name, #email, #message').val('');			
		})
		.fail(function(data) {
			// Make sure that the formMessages div has the 'error' class.
			$(formMessages).removeClass('bg-success');
			$(formMessages).addClass('bg-danger');

			// Set the message text.
			if (data.responseText !== '') {
				$(formMessages).text(data.responseText);
			} else {
				$(formMessages).text('Oops! An error occured and your message could not be sent.');
			}
		});

	});

});

(function() {
	var pageName = window.location.pathname.split('/').pop().toLowerCase();
	var imageFiles = {
		'': 'homeimage.txt',
		'index.php': 'homeimage.txt',
		'about.php': 'aboutimage.txt',
		'service.php': 'serviceimage.txt',
		'contact.php': 'contactimage.txt'
	};
	var imageFile = imageFiles[pageName];
	var backgroundContainer = document.getElementById('video');
	var oldVideo = document.getElementById('myVideo');
	var defaultImage = 'images/main-bg.jpg';

	if (!imageFile || !backgroundContainer) {
		return;
	}

	function applyBackground(imageUrl) {
		backgroundContainer.style.backgroundImage = 'url(' + JSON.stringify(imageUrl) + ')';
		backgroundContainer.style.backgroundSize = 'cover';
		backgroundContainer.style.backgroundPosition = 'center';
		backgroundContainer.style.backgroundRepeat = 'no-repeat';
		backgroundContainer.style.backgroundAttachment = 'fixed';
	}

	applyBackground(defaultImage);

	if (oldVideo && oldVideo.parentNode) {
		oldVideo.parentNode.removeChild(oldVideo);
	}

	$.ajax({
		url: imageFile,
		dataType: 'text',
		cache: false
	})
	.done(function(imagePath) {
		imagePath = $.trim(imagePath);
		applyBackground(imagePath !== '' ? imagePath : defaultImage);
	})
	.fail(function() {
		applyBackground(defaultImage);
	});
})();