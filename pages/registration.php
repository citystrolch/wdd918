<!-- Registration -->
<h2>Registriere dich!</h2>

<form class="uk-form-horizontal">
	<h3>Deine Angaben</h3>

	<div class="uk-form-row">
		<label for="fld_username" class="">Name</label>
		<input type="text" name="username" id="fld_username" class="uk-form-large">
	</div>
	
	<div class="uk-form-row">
		<label for="fld_useradresse" class="">Adresse</label>
		<input type="text" name="useradresse" id="fld_useradresse" class="uk-form-large">
	</div>
	
	<div class="uk-form-row">
		<label for="fld_userstockwerk" class="">Stockwerk</label>
		<input type="text" name="userstockwerk" id="fld_userstockwerk" class="uk-form-large uk-form-width-small">
	</div>
	
	<div class="uk-form-row">
		<label for="fld_userplz" class="">PLZ / Ort</label>
		<input type="text" name="userplz" id="fld_userplz" class="uk-form-large uk-form-width-small"> &nbsp; &nbsp; 
		<input type="text" name="userort" id="fld_userort" class="uk-form-large">
	</div>
	
	<div class="uk-form-row">
		<label for="fld_usertelefon" class="">Telefon</label>
		<input type="text" name="usertelefon" id="fld_usertelefon" class="uk-form-large">
	</div>
	
	<hr>
	<div class="uk-form-row">
		<label for="fld_useremail" class="">Email (Username)</label>
		<input type="text" name="useremail" id="fld_useremail" class="uk-form-large">
	</div>
	<div class="uk-form-row">
		<label for="fld_userpasswort" class="">Passwort</label>
		<input type="password" name="userpasswort" id="fld_userpasswort" class="uk-form-large">
	</div>
	<div class="uk-form-row">
		<label for="fld_userpasswort" class="">Passwort wiederholen</label>
		<input type="password" name="userpasswort_confirm" id="fld_userpasswort" class="uk-form-large">
	</div>
	<hr>
	
	<div class="uk-form-row">
		<label for="input_delivery_date" class="">Datenschutz</label>
		<label class="">
			<input type="checkbox" name="delivery" id="input_delivery_date" value="per sofort">
			Ich ahbe die Datenschutzerklärung gelesen und erkläre mich einverstanden, dass meine Daten gespeichert werden dürfen.
		</label>
	</div>
	

	
	<div class="uk-width-1-1 uk-margin-top uk-text-right">
		<a class="uk-button uk-button-primary" href="index.php?page=checkout">Registrieren</a><br>
	</div>
	
</form>

<!-- End Registration -->