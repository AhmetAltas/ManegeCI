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
				<h1>Edit</h1>
			</div>
			<?= form_open() ?>
				<div class="form-group">
					<label for="Paardnaam">Naam van Paard:</label>
					<input type="text" class="form-control" id="Paardnaam" name="Paardnaam" placeholder="Paardnaam">
				</div>
				<div class="form-group">
					<label for="beschrijving">Beschrijving</label>
					<input type="text" class="form-control" id="Beschrijving" name="beschrijving" placeholder="Beschrijving paard">
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-default" value="submit">
				</div>
			</form>
		</div>
	</div><!-- .row -->
</div><!-- .container -->