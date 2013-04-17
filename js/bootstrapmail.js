/** PHP Mailer */
function contactMe() {
	var email = $('#email').attr('value');
	var message = $('#message').attr('value');
	var website = $('#website').attr('value');
	var name = $('#name').attr('value');
	$.get("email.php", { email: email, message: message, website: website, name: name },
	function(data){
		alert("" + data);
	});
}