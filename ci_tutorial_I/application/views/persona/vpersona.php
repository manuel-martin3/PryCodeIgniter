<!-- 
	<h1>cargo persona</h1>
	<form action="<?php echo base_url(); ?>cpersona/guardar" method="POST">
		<table>

			<tr>
				<td><label for="">DNI</label></td>
				<td><input type="text" name="txt_dni" maxlength="8"></td>
			</tr>		
			<tr>
				<td><label for="">Nombre</label></td>
				<td><input type="text" name="txt_nombre"></td>
			</tr>
			<tr>
				<td><label for="">Ap paterno</label></td>
				<td><input type="text" name="txt_appaterno"></td>
			</tr>
			<tr>
				<td><label for="">Ap Materno</label></td>
				<td><input type="text" name="txt_apmaterno"></td>
			</tr>			
			<tr>
				<td><label for="">Email</label></td>
				<td><input type="email" name="txt_email"></td>
			</tr>
			<tr>
				<td><label for="">Ciudad</label></td>
				<td><div class="form-group">
				<select id="cbo_ciudad" class="form-comtrol">
					<option value="">::Elija::</option>
				</select>
				</div></td>
			</tr>

			<tr>
				<td><label for="">Fec. Nac.</label></td>
				<td><input type="date" name="txt_fecnac"></td>
			</tr>

			<tr>
				<td colspan="2"><label for="">Usuario</label></td>				
			</tr>
			<tr>
				<td><label for="">Usuario</label></td>
				<td><input type="text" name="txt_usuario"></td>
			</tr>		
			<tr>
				<td><label for="">Clave</label></td>
				<td><input type="password" name="txt_clave"></td>
			</tr>				
			<tr>
				<td colspan="2"><input type="submit" value="Guardar"></td>
			</tr>
		</table>
	</form> -->

	<!-- <a href="<?php echo base_url();?>clogin">Loguearse</a>
	<br><br><br> -->

	<button type="submit" id="btn_getPersona" name="search"  class="btn btn-flat"> <i class="fa fa-search"></i> &nbsp;Buscar</button>
	<br>
	<div class="col-sm-12">
		<div class="box box-primary">
			<table id="tbl_persona" class="table table-bordered">			
				<tr>
					<th style="width: 10px">#</th>
					<th>Nombre</th>
					<th>Paterno</th>
					<th>Materno</th>
					<th>DNI</th>
					<th>Ciudad</th>					
				</tr>

			</table>
		</div>
	</div>



	<script type="text/javascript">
		var baseurl = "<?php echo base_url(); ?>";
	</script>

