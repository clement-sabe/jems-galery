<?php
$title = 'contact';
include 'header.php';
 ?>


<div class="container-fluid">
<div class="row col-md-12">
  <div class="col-md-12">
<h2 class="text-center mt-5 text-secondary">Contact</h2>
</div>
</div>
</div>
<head>
		<link rel="stylesheet" href="assets/css/contact.css"/>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	</head>

	<body>
		<div class = "frame">
<div id = "button_open_envelope" class="text-center">GO!
</div>
			<div class = "message">
				<form method="post" action="contact.php">
					<input type="text" name="name" id="name" placeholder=" Nom " required>
			
					<input type="email" name="email" id="email" placeholder=" Email " required pattern="^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$">
				
					<input type="text" name="phone" id="phone" placeholder=" téléphone (facultatif)" autofocus> 
				
					<textarea name="message" id="messarea" placeholder=" Message " required></textarea>
			
					
					<input type="submit" value="envoyer" id="send">
				</form>
			</div>
			<div class = "bottom"></div>			
			<div class = "left"></div>
			<div class = "right"></div>
			<div class = "top"></div>
			<script src="assets/js/contact.js"></script>
		</div>
	</body>


<?php include 'footer.php';?>