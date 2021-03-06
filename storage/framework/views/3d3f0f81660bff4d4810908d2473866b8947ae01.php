<?php $__env->startSection('title', 'Artículos'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Artículos</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<script src="<?php echo e(asset('/vendors/ckeditor/ckeditor.js')); ?>"></script>
<div class="row">
  <?php if(\Session::has('success')): ?>
  <div class="col-md-12">
       <p> <?php echo \Session::get('success'); ?></p>
  </div>
  <?php endif; ?>
          <div class="col-md-12">
          <form method="post" name="agregarArticulo" action="<?php echo e(route('agregarArticulo')); ?>" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
             <div class="card-body">
                  <div class="form-group">
                    <label for="titulo">Título</label>
                    <input type="text" name="titulo" class="form-control" id="titulo" placeholder="Ingresar título del artículo...">
                  </div>
                  <div class="form-group">
                    <label for="copete">Copete</label>
                    <input type="text" name="copete" class="form-control" id="copete" placeholder="Ingresar copete...">
                  </div>
                  <div class="card card-primary">
                      <div class="card-header">
                        <h3 class="card-title">Portada</h3>
                      </div>
                      <div class="card-body">
                        <div class="form-group">
                          <label for="descripcionPortada">Descripción de la portada</label>
                          <input type="text" name="descripcionPortada" class="form-control" id="descripcionPortada" placeholder="Ingresar de descripcion portada...">
                          <label for="portada">Imagen de portada</label>
                          <div class="input-group">
                            <div class="custom-file">
                              <input name="imagen" type="file" class="custom-file-input" id="portada">
                              <label class="custom-file-label" for="portada">Elegir imagen</label>
                            </div>
                            <div class="input-group-append">
                              <span class="input-group-text" id="">Subir</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  <div class="form-group">
                        <label>Categoría</label>
                        <select class="custom-select" name="categoria">
                          <option selected disabled>Elegir categoría...</option>
                          <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <option value="<?php echo e($categoria->id); ?>"><?php echo e($categoria->nombre); ?></option>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                  </div>
            </div>
          <!-- EDITOR -->
            <!-- /.card-header -->
            <div class="panel-body">
                            <textarea class="ckeditor"  name="cuerpo" id="editor1" rows="100" cols="80">
                                Este es el textarea que es modificado por la clase ckeditor
                            </textarea>
            </div>
          <div class="card-footer">
              <button type="submit" class="btn btn-primary">Agregar artículo</button>
          </div>
        </form>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/admin_custom.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <script> console.log('Hi!'); </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/sitioEmprendedores/resources/views/admin/articulos/create.blade.php ENDPATH**/ ?>