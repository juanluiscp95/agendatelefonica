

<?php $__env->startSection('titulo','Crear nuevo registro'); ?>

<?php $__env->startSection('contenido'); ?>


<div class="container">
     <br>

<?php echo $__env->make('agenda.navuser', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo e(route('agenda.index')); ?>">Inicio</a></li>
    <li class="breadcrumb-item active" aria-current="page">Crear nuevo registro</li>
  </ol>
</nav>
</div>

<form method="POST" action="<?php echo e(route('agenda.store')); ?>">
<?php echo csrf_field(); ?>
<div class="container register">


                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="http://www.idaipqroo.org.mx/wp-content/uploads/2018/06/proteccion-de-datos-personales-791x1024.png" alt=""/>
                        <h3>Bienvenid@</h3>
                        <p>Por favor llena los datos correctamente en el sistema!</p>
                        
                    </div>
                    <div class="col-md-9 register-right">
                 
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                
                                <h3 class="register-heading">Crear nuevo Registro</h3>
                                                            
                                <div class="row register-form">

                                    <div class="col-md-6">                                        

                                        <div class="form-group">
                                           <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                                </div>
                                            <input type="text" class="form-control" id="nombres" name="nombres" placeholder="Nombres" required="">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                           <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-user-edit text-info"></i></div>
                                                </div>
                                            <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Apellidos" required="">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                           <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-phone text-info"></i></div>
                                                </div>
                                            <input class="form-control" type="number" name="telefono" placeholder="Telefono: 18491115555" id="telefono">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                           <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-mobile-alt text-info"></i></div>
                                                </div>
                                            <input class="form-control" type="number" name="celular" placeholder="Celular: 18491115555" id="Celular">
                                            </div>
                                        </div>
                                       
                                     
                                        <div class="form-group">
                                            <div class="maxl">
                                                <label class="radio inline"> 
                                                    <input type="radio" name="sexo" value="Masculino" checked>
                                                    <span> Masculino </span> 
                                                </label>
                                                <label class="radio inline"> 
                                                    <input type="radio" name="sexo" value="Femenino">
                                                    <span>Femenino </span> 
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        

                                         <div class="form-group">
                                           <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa  fa-at text-info"></i></div>
                                                </div>
                                             <input type="email" name="email" class="form-control" placeholder="Email" value="" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                           <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-address-card text-info"></i></div>
                                                </div>
                                             <input type="text" name="posicion" class="form-control" placeholder="Posición" value="" />
                                            </div>
                                        </div>


                                        <div class="form-group">
                                           <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-map-marker-alt text-info"></i></div>
                                                </div>
                                             <select name="departamento" class="form-control">
                                                <option class="hidden" selected disabled>Departamento</option>
                                                <option>Gerencia de TI</option>
                                                <option>Auditoria TI</option>
                                                <option>Contabilidad</option>
                                            </select>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                           <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa  fa-dollar-sign text-info"></i></div>
                                                </div>
                                              <input type="number" class="form-control" name="salario" placeholder="salario *" value="" />
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label >Fecha de nacimiento</label>
                                           <div class="input-group">
                                                <div class="input-group-prepend">                                                    
                                                    <div class="input-group-text"><i class="fa fa-calendar-alt text-info"></i></div>
                                                </div>
                                                
                                                <input type="date" name="fechadenacimiento" id="fechadenacimiento" min="1000-01-01"
                                                  max="3000-12-31" class="form-control">                                                   
                                            </div>
                                        </div>

                                    
                                    

                                    <button type="submit" class="redondo btn btn-info"><i class="fas fa-save"></i> Guardar</button>
                                    <a href="<?php echo e(route('cancelar')); ?>" class="redondo btn btn-danger"><i class="fas fa-ban"></i> Cancelar</a>
                                    </div>
                                </div>
                            </div>
                       
                        </div>
                    </div>
                </div>

            </div>

</form>

<?php echo $__env->make('plantilla.footer',['container'=>'container'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('plantilla.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laravel6\agendatelefonica\resources\views/agenda/create.blade.php ENDPATH**/ ?>