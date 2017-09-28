<div class="row">
	<div class="col-md-12">
	<!-- Horizontal Form -->
	<div class="box box-info">
	<div class="box-header with-border">
	  <h3 class="box-title"><?php echo "Usuario: ".$this->session->userdata('s_usuario');?></h3>
	</div>
	<!-- /.box-header -->
	<!-- form start -->
	<form action="<?php echo base_url();?>cpersona/actualizarDatos" method="POST" class="form-horizontal">
				
	  <div class="box-body">

	    <div class="form-group">
	      <label for="inputNombre" class="col-sm-2 control-label">Nombre</label>
	      <div class="col-sm-10">
	        <input type="text" class="form-control" id="inputNombre" name="txt_nombre" placeholder="Nombre">
	      </div>
	    </div>

	    <div class="form-group">
	      <label for="inputPaterno" class="col-sm-2 control-label">Ap Paterno</label>
	      <div class="col-sm-10">
	        <input type="text" class="form-control" id="inputPaterno" name="txt_appaterno" placeholder="Ap.Paterno">
	      </div>
	    </div>

	    <div class="form-group">
	      <label for="inputMaterno" class="col-sm-2 control-label">Ap Materno</label>
	      <div class="col-sm-10">
	        <input type="text" class="form-control" id="inputMaterno" name="txt_apmaterno" placeholder="Ap.Materno">
	      </div>
	    </div>

	    <div class="form-group">
	      <label for="inputEmail" class="col-sm-2 control-label">Correo</label>
	      <div class="col-sm-10">
	        <input type="email" class="form-control" id="inputEmail" name="txt_email" placeholder="Correo">
	      </div>
	    </div>    


	    <div class="form-group">
	    	<div class="col-md-10 pull-right">
	  			<button type="submit" class="btn btn-primary">Actualizar</button>
	  		</div>
	    </div>

	  </div>

	</form>

	<form action="<?php echo base_url();?>cpersona/eliminarPersona" method="PoST" class="form-horizontal">
		
	  <div class="box-body">

	    <div class="form-group">
	      <label for="inputIdpersona" class="col-sm-2 control-label">Id Persona</label>
	      <div class="col-sm-10">
	        <input type="text" class="form-control" id="inputIdpersona" name="txt_idpersona" placeholder="Nombre">
	      </div>
	    </div>

	    <div class="form-group">
	    	<div class="col-md-10 pull-right">
	  			<button type="submit" class="btn btn-danger">Eliminar</button>
	  		</div>
	    </div>
	  </div>

	</form>
	</div>
	<!-- /.box -->
	</div>
</div>
  

