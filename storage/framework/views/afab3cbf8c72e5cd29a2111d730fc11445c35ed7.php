<?php $__env->startSection('title', 'Artículos'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Artículos</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Consultas</h1>
          </div><!-- /.col -->
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Registros</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Usuario</th>
                      <th>Fecha</th>
                      <th>Consulta</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>183</td>
                      <td>Administrador</td>
                      <td>11-7-2014</td>
                      <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                      <td><i class="nav-icon fas fa-comments"></i> <i class="nav-icon fas fa-trash"></i></td>
                    </tr>
                    <tr>
                      <td>219</td>
                      <td>Administrador</td>
                      <td>11-7-2014</td>
                      <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                      <td><i class="nav-icon fas fa-comments"></i> <i class="nav-icon fas fa-trash"></i></td>
                    </tr>
                    <tr>
                      <td>657</td>
                      <td>Usuario administrador</td>
                      <td>11-7-2014</td>
                      <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                      <td><i class="nav-icon fas fa-comments"></i> <i class="nav-icon fas fa-trash"></i></td>
                    </tr>
                    <tr>
                      <td>175</td>
                      <td>Administrador</td>
                      <td>11-7-2014</td>
                      <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                      <td><i class="nav-icon fas fa-comments"></i> <i class="nav-icon fas fa-trash"></i></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
      </div><!-- /.container-fluid -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="/css/admin_custom.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script> console.log('Hi!'); </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/emprendedoresSitio/resources/views/admin/consultas/index.blade.php ENDPATH**/ ?>