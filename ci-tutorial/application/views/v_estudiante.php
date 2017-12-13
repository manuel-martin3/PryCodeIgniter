<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>

    <link rel="stylesheet" href="https://bootswatch.com/4/cosmo/bootstrap.css">
    <link rel="stylesheet" href="https://bootswatch.com/4/cosmo/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.4.2/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script type="text/javascript" src="https://bootswatch.com/_vendor/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="https://bootswatch.com/_vendor/popper.js/dist/umd/popper.min.js"></script>
    <script type="text/javascript" src="https://bootswatch.com/_vendor/bootstrap/dist/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.4.2/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.4.2/js/buttons.flash.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.4.2/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.4.2/js/buttons.print.min.js"></script>

    <style type="text/css" media="screen">
      th,td{
        text-align: center;
      }
    </style>

  </head>
  <body>
    <div class="container">
      <h1 align="center" >Datos del estudiante en datatable</h1></br>
      <?php if ($mensaje = $this->session->flashdata('mensaje')): ?>
        <div class="form-group">
          <div class="col-md-12">
            <div class="alert alert-dismissible alert-success">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <?php echo $mensaje; ?>
            </div>
          </div>
        </div>
      <?php endif ?>

      <a style="margin-bottom: 10px;" href="" class="btn btn-primary" data-toggle="modal" data-target="#addModal">Agregar Data</a>
      <table id="datatable" class="table table-hover table-striped" cellspacing="0" width="100%">
          <thead>
              <tr>
                <th>Id</th>
                <th>Nim</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Phone</th>
                <th>Address</th>
                <th>City</th>
                <th>Country</th>
                <th>Opción</th>
              </tr>
          </thead>

          <?php
            $no = 1;
            if ($data->num_rows() > 0) {
              foreach ($data->result() as $row) {
                ?>
                  <tr>
                    <td><?php echo $row->id ?></td>
                    <td><?php echo $row->nim ?></td>
                    <td><?php echo $row->FirstName ?></td>
                    <td><?php echo $row->LastName ?></td>
                    <td><?php echo $row->phone ?></td>
                    <td><?php echo $row->address ?></td>
                    <td><?php echo $row->city ?></td>
                    <td><?php echo $row->country ?></td>
                    <td>
                      <a href="#" class="btn btn-warning">Edit</a>
                      <a href="#" class="btn btn-danger">Delete</a>
                    </td>
                  </tr>
                <?php
              }
            }
          ?>

      </table>
    </div>

    <div id="addModal" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title">Modal title</h1>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action= "<?php echo base_url('C_estudiante/insertEstudiante') ?>" method="post" accept-charset="utf-8">
              <div class="form-group">
                <label for="nim">Nim</label>
                <input class="form-control" type="text" name="nim" placeholder="Ingresar Nim" required="">
              </div>
              <div class="col-md-12">
                <?php echo form_error('nim', '<span class="badge text-danger">','</span>') ?>
              </div>

              <div class="form-group">
                <label for="FirstName">First Name</label>
                <input class="form-control" type="text" name="FirstName" placeholder="Ingresar First Name" required="">
              </div>
              <div class="col-md-12">
                <?php echo form_error('FirstName', '<span class="badge text-danger">','</span>') ?>
              </div>

              <div class="form-group">
                <label for="LastName">Last Name</label>
                <input class="form-control" type="text" name="LastName" placeholder="Ingresar Last Name" required="">
              </div>
              <div class="col-md-12">
                <?php echo form_error('LastName', '<span class="badge text-danger">','</span>') ?>
              </div>

              <div class="form-group">
                <label for="phone">Phone</label>
                <input class="form-control" type="text" name="phone" placeholder="Ingresar Phone" required="">
              </div>
              <div class="col-md-12">
                <?php echo form_error('phone', '<span class="badge text-danger">','</span>') ?>
              </div>

              <div class="form-group">
                <label for="address">Address</label>
                <input class="form-control" type="text" name="address" placeholder="Ingresar Address" required="">
              </div>
              <div class="col-md-12">
                <?php echo form_error('address', '<span class="badge text-danger">','</span>') ?>
              </div>

              <div class="form-group">
                <label for="city">City</label>
                <select class="form-control" name="city">
                  <option value="select">::Elejir::</option>
                  <option value="lima">Lima</option>
                  <option value="piura">Piura</option>
                  <option value="tumbes">Tumbes</option>
                </select>
              </div>
              <div class="col-md-12">
                <?php echo form_error('city', '<span class="badge text-danger">','</span>') ?>
              </div>

              <div class="form-group">
                <label for="country">Country</label>
                <select class="form-control" name="country">
                  <option value="select">::Elejir::</option>
                  <option value="lima">Perú</option>
                  <option value="piura">Bolivia</option>
                  <option value="tumbes">Brasil</option>
                </select>
              </div>
              <div class="col-md-12">
                <?php echo form_error('country', '<span class="badge text-danger">','</span>') ?>
              </div>

              <div class="modal-footer">
                <input class="btn btn-secondary" type="button" name="" value="Cerrar" data-dismiss="modal">
                <input class="btn btn-primary" type="submit" name="" value="Guardar">
              </div>

            </form>
          </div>

        </div>
      </div>
    </div>

  </body>

  <script type="text/javascript">
        $(document).ready(function(){
          $('#datatable').datatable();
        });
  </script>

  <script type="text/javascript">
/*
  $(document).ready(function() {
  $('#example').DataTable( {
      ajax: {
        "url" : "https://api.myjson.com/bins/14t4g",
        dataSrc : ''
      },
      columns: [
          { data: 'id' },
          { data: 'name' },
          { data: 'lat' },
          { data: 'lon' }


      ],
      dom: 'Bfrtip',
      buttons: [
            {
                extend:    'copyHtml5',
                text:      '<i class="text-primary fa fa-files-o"></i>',
                titleAttr: 'Copy'
            },
            {
                extend:    'excelHtml5',
                text:      '<i class="text-primary fa fa-file-excel-o"></i>',
                titleAttr: 'Excel'
            },
            {
                extend:    'csvHtml5',
                text:      '<i class="text-primary fa fa-file-text-o"></i>',
                titleAttr: 'CSV'
            },
            {
                extend:    'pdfHtml5',
                text:      '<i class="text-primary fa fa-file-pdf-o"></i>',
                titleAttr: 'PDF'
            }
        ]
    } );
} );
*/
  </script>
</html>
