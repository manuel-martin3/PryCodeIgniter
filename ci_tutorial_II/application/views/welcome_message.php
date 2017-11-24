<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css') ?>"/>
	<link rel="stylesheet" href="<?php echo base_url('css/dataTables.bootstrap.min.css') ?>"/>
	<style type="text/css">
		body{
			padding-top: 50px;
		}
	</style>
	<script src="<?php echo base_url('js/jquery-2.2.3.min.js') ?>"></script>
	<script src="<?php echo base_url('js/bootstrap.min.js') ?>"></script>
	<script src="<?php echo base_url('js/jquery.dataTables.min.js') ?>"></script>
	<script src="<?php echo base_url('js/dataTables.bootstrap.min.js') ?>"></script>
</head>
<body>
	<div class="row">
		<div class="container">
			<div class="col-md-6">
				<div id="message"></div>
				<?php echo form_open('welcome', array('id'=>'person')); ?>
				<div class="form-group">
						<label>NIM</label>
						<input type="text" name="nim" class="form-control" maxlength="8" placeholder="NIM"/>
				</div>

				<div class="form-group">
					<label>First Name</label>
					<input type="text" name="FirstName" class="form-control" placeholder="First Name"/>
				</div>

				<div class="form-group">
					<label>Last Name</label>
					<input type="text" name="LastName" class="form-control" placeholder="Last Name"/>
				</div>

				<div class="form-group">
					<label>Address</label>
					<input type="text" name="address" class="form-control" placeholder="Address"/>
				</div>

				<div class="form-group">
					<label>Phone</label>
					<input type="text" name="phone" class="form-control" placeholder="Phone"/>
				</div>

				<div class="form-group">
					<label>City</label>
					<select name="city" class="form-control">
						<option value="">Choose City</option>
						<option value="Lima">Lima</option>
						<option value="Bogota">Bogotá</option>
						<option value="Buenos_Aires">Buenos Aires</option>
						<option value="Sao_Paulo">Sao Paulo</option>
						<option value="Quito">Quito</option>
						<option value="La_Paz">La Paz</option>
						<option value="Asuncion">Asunción</option>
						<option value="Montevideo">Montevideo</option>
					</select>
				</div>

				<div class="form-group">
					<label>Country</label>
					<select name="country" class="form-control">
						<option value="">Choose Country</option>
						<option value="Peru">Perú</option>
						<option value="Colombia">Colombia</option>
						<option value="Argentina">Argentina</option>
						<option value="Brasil">Brasil</option>
						<option value="Ecuador">Ecuador</option>
						<option value="Bolivia">Bolivia</option>
						<option value="Paraguay">Paraguay</option>
						<option value="Uruguay">Uruguay</option>
					</select>
				</div>

				<button type="button" class="btn btn-primary save" onclick="save_dat()">Save</button>
				<button type="button" class="btn btn-success update" disabled="disabled" onclick="show_row_dat()">Cancel</button>
				<?php echo form_close(); ?>
			</div>
		</div>
		<div class="container">
			<div class="col-md-12">
				<h3 class="page-header">Lista de Registros</h3>
				<table id="data_person" class="table table-hover">
					<thead>
						<tr>
							<th>Nim</th>
							<th>First Name</th>
							<th>Last Name</th>
							<th>Phone</th>
							<th>Address</th>
							<th>City</th>
							<th>Country</th>
							<th>Ctrl</th>
						</tr>
					</thead>
					<tbody></tbody>
				</table>
			</div>
		</div>
	</div>

	<script type="text/javascript">

	/*Guardar*/
		function save_dat() {
			if(confirm('¿Seguro desea Guardar?')){
			$.ajax({
				url: "<?php echo site_url('welcome/save_') ?>",
				type: 'POST',
				dataType: 'json',
				data: $('#person').serialize(),
				encode:true,
				success:function(data) {
					if(!data.success){
						if(data.errors){
							$('#message').html(data.errors).addClass('alert alert-danger');
						}
					}else {
						alert(data.message);
						setTimeout(function() {
							window.location.reload()
						}, 400);
						}
					}
				});
			}
		}

		/*Mostrar Cambio*/
		function show_row_dat() {
			$.ajax({
				url: "<?php echo site_url('welcome/show_row_') ?>",
				type: 'POST',
				dataType: 'json',
				data: $('#person').serialize(),
				encode:true,
				success:function (data) {
					if(!data.success){
						$('#message').html(data.errors).addClass('alert alert-danger');
					}else {
						alert(data.message);
						setTimeout(function () {
							window.location.reload();
						}, 400);
					}
				}
			})
		}

		/*Actualizar*/
		function update_dat(nim) {
			if(confirm('¿Seguro desea Modificar?')){
			$.ajax({
				url: "<?php echo site_url('welcome/update_/') ?>",
				type: 'POST',
				dataType: 'json',
				data: 'nim='+nim,
				encode:true,
				success:function (data) {
					$('.save').attr('disabled', true);
					$('.update').removeAttr('disabled');
					$('input[name="nim"]').val(data.nim);
					$('input[name="FirstName"]').val(data.FirstName);
					$('input[name="LastName"]').val(data.LastName);
					$('input[name="phone"]').val(data.phone);
					$('input[name="address"]').val(data.address);
					$('input[name="city"]').val(data.city);
					$('input[name="country"]').val(data.country);

					}
				});
			}
		}

		/*Eliminar*/
		function delete_dat(nim) {
			if(confirm('¿Seguro desea Borrar?')){
				$.ajax({
					url: "<?php echo site_url('welcome/delete_/') ?>",
					type: 'POST',
					dataType: 'json',
					data: 'nim='+nim,
					encode:true,
					success:function(data) {
						if(!data.success){
							if(data.errors){
								$('#message').html(data.errors).addClass('alert alert-danger');
							}
						}else {
							$('#message').html(data.message).addClass('alert alert-success').removeClass('alert alert-danger');
							setTimeout(function() {
								window.location.reload();
							}, 400);
						}
					}
				});
			}
		}

		/*Mostrar Datos*/
		$('#data_person').DataTable({
			"ajax":{
				"url":"<?php echo site_url('welcome/show_') ?>",
				"type":"POST"
			}
		})
	</script>
</body>
</html>
