<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/mapa.css">
		<title>Criar Evento</title>
	</head>
	<body>
		<input id="pac-input" class="controls" type="text" placeholder="Enter a location">
		<div id="type-selector" class="controls">
			<input type="radio" name="type" id="changetype-all" checked="checked">
			<label for="changetype-all">All</label>
			<input type="radio" name="type" id="changetype-establishment">
			<label for="changetype-establishment">Establishments</label>
			<input type="radio" name="type" id="changetype-address">
			<label for="changetype-address">Addresses</label>
			<input type="radio" name="type" id="changetype-geocode">
			<label for="changetype-geocode">Geocodes</label>
		</div>
		<div id="map"></div>
		<?php echo form_open('eventos/create'); ?>
			<input type="hidden" class="nome" name="nome" required>
			<input type="hidden" class="endereco" name="endereco" required>
			<div class="form-group">
				<label for="textData" class="control-label">Data do evento</label>
				<input type="date" class="form-control" name="data" required>
			</div>
			<div class="form-group">
				<label for="Horario" class="control-label">Horario do evento</label>
				<input type="text" class="form-control" placeholder="Hora Aqui" name="hora" data-mask="00:00" required>
			</div>
			<div class="form-group">
				<button class="btn btn-primary" type="submit">Criar Evento</button>
			</div>
		</form>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBXD2R2q9VyjdaRkyhUp81sBx7zQNdBHj4&libraries=places&callback=initMap" async defer></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/script.js"></script>
	</body>
</html>