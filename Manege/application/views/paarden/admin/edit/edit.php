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
			<?= form_open('paarden/edit/'.$paard_item->id) ?>
			<?= var_dump($paard_item)?>
				<div class="form-group">
					<label for="Paardennaam">Naam van Paard:</label>
					<input type="text" class="form-control" id="Paardennaam" name="Paardennaam" placeholder="Paardennaam">
				</div>
				<div class="form-group">
					<label for="beschrijving">Beschrijving</label>
					<input type="text" class="form-control" id="Beschrijving" name="Beschrijving" placeholder="Beschrijving paard">
				</div>
				<div class="form-group">
					<label for="Springsport">Springsport</label>
					<input type="text" class="form-control" id="Springsport" name="Springsport" placeholder="Springsport paard">
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-default" value="submit">
				</div>
			</form>
		</div>
	</div><!-- .row -->
</div><!-- .container -->