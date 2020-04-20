<?php $__env->startSection('title', 'Artículos'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Artículos</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="row mb-2">
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
                      <th>Título</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $__currentLoopData = $articulos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $articulo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                        <td><?php echo e($articulo->id); ?></td>
                        <td><?php echo e($articulo->verUsuario); ?></td>
                        <td><?php echo e($articulo->created_at); ?></td>
                        <td><?php echo e($articulo->titulo); ?></td>
                        <td><a href="<?php echo e(route('editarArticulo',$articulo->id)); ?>"><i class="nav-icon fas fa-edit"></a></i><a class="articuloEliminar" data-toggle="modal" data-target="#articuloEliminar"><i class="nav-icon fas fa-trash"></i></a>
                        </td>
                      </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/sitioEmprendedores/resources/views/admin/articulos/index.blade.php ENDPATH**/ ?>