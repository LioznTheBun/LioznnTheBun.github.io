<?php include("parties/header.html") ?>
<link rel="stylesheet" type="text/css" href="assets/css/contact.css" media="all" />
<section class="section">
	<div class="content">
		<h2>Vous pouvez me retrouver sur mes différents réseaux :</h2>
		<div class="contact-holder row">
			<a href="https://github.com/LioznTheBun" target="_blank"><img src="assets/img/GitHub.png" alt="Logo GitHub">Mon GitHub</a>
		</div>
		<div class="contact-holder row">
			<a href="https://www.linkedin.com/in/etienne-pourchon-543253266/" target="_blank"><img src="assets/img/LinkedIn.png" alt="Logo LinedIn">Mon LinkedIn</a>
		</div>
		<div class="contact-holder row">
			<a href="mailto:etienne.pourchon@gmail.com" target="_blank"><img src="assets/img/Gmail_icon.svg" alt="Logo LinedIn">Mon Email</a>
		</div>
	</div>
</section>
<!--section id="contact" class="section">
	<div class="content">
		<h2>Ou vous pouvez m'envoyer un courriel ici :</h2>
		<form id="contact-form" method="post">
			<div class="form-group">
				<label for="email">Votre email :</label>
				<input id="email" type="email" name="email" required>
			</div>
			<div class="form-group">
				<label for="message">Message :</label>
				<textarea id="message" name="message" rows="4" required></textarea>
			</div>
			<button type="submit">Envoyer</button>
		</form>
		<?php
		/*if (isset($_POST['message'])) {
			$entete  = 'MIME-Version: 1.0' . "\r\n";
			$entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
			//$entete .= 'From: portfolio@jbdelasalle.com' . "\r\n";
			$entete .= 'Reply-to: ' . $_POST['email'];

			$message = '<h1>Message envoyé depuis la page Contact de portfolio</h1>
			<p><b>Email : </b>' . $_POST['email'] . '<br>
			<b>Message : </b>' . htmlspecialchars($_POST['message']) . '</p>';

			$retour = mail('etienne.pourchon@gmail.com', 'Envoi depuis page Contact', $message, $entete);
			if ($retour)
				echo '<p>Votre message a bien été envoyé.</p>';
		}*/
		?>
	</div>
</section-->
<?php include("parties/footer.html") ?>