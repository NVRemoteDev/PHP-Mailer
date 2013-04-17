<!-- Add this code where you want the contact form to go -->
<div class="span6 offset3" id="emailForm">
	<h3>Contact Me!</h3>
	<p>Your IP has been logged in case of abuse: <?echo $_SERVER['REMOTE_ADDR'];?></p>
	<form class="form-horizontal">
	<div class="control-group">
		<label class="control-label" for="inputName">Name:</label>
		<div class="controls">
			<input type="text" id="name" placeholder="Your Name">
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="inputEmail">* Email:</label>
		<div class="controls">
			<input type="text" id="email" placeholder="Your Email">
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="inputName">Website:</label>
		<div class="controls">
			<input type="text" id="website" placeholder="Your Website">
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="inputMessage">* Message:</label>
		<div class="controls">
			<textarea rows="3" id="message" placeholder="Message"></textarea>
		</div>
	</div>
	<div class="control-group">
		<div class="controls">
			<button type="submit" onclick="contactMe();" class="btn">Send!</button>
		</div>
	</div>
	</form>
	<p>Field marked with * are required.</p>
	<a href="http://www.pluswebhost.com/portfolio">Twitter Bootstrap PHP Contact Form</a>
</div>