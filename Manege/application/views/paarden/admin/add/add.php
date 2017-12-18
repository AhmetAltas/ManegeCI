<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="container">
	<div class="row">
		<?php if (validation_errors()) : ?>
			<div class="col-md-12">
				<div class="alert alert-danger" role="alert">
					<?= validation_errors() ?>
				</div>
			</div>
		<?php endif; ?>
		<?php if (isset($error)) : ?>
			<div class="col-md-12">
				<div class="alert alert-danger" role="alert">
					<?= $error ?>
				</div>
			</div>
		<?php endif; ?>
		<div class="col-md-12">
			<div class="page-header">
				<h1>Paard toegevoegen</h1>
			</div>
			<?= form_open() ?>
				<div class="form-group">
					<label for="Paardennaam">Naam van Paard:</label>
					<input type="text" class="form-control" id="PaardenNaam" name="Paardennaam" placeholder="Vul hier de naam van het paard in.">
					<p class="help-block">Alleen letters en nummers.</p>
				</div>
				<div class="form-group">
					<label for="beschrijving">Beschrijving</label>
					<input type="text" class="form-control" id="Beschrijving" name="beschrijving" placeholder="Vul hier de beschrijving in.">
					<p class="help-block">De beschrijving</p>
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-default" value="Register">
				</div>
			</form>
		</div>
	</div><!-- .row -->
</div><!-- .container -->