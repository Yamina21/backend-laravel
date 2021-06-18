

<?php $__env->startSection('content'); ?>
       <h1>create Graph</h1>

       <?php echo Form::open(['action' => 'App\Http\Controllers\GraphController@store', 'method'=> 'POST']); ?>

        <div class="form-group">
        <?php echo e(Form::label('name','Name')); ?>

        <?php echo e(form::text('name','',['class'=> 'form-control', 'placeholder' =>'Graph Name'])); ?>

        </div>
        <div class="form-group">
        <?php echo e(Form::label('description','Description')); ?>

        <?php echo e(form::textarea('description','',['class'=> 'form-control', 'placeholder' =>'Description'])); ?>

        </div>
        <?php echo e(Form::submit('Submit',['class'=> 'btn btn-primary' ])); ?>

        <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>

<script src="<?php echo e(mix('js/app.js')); ?>"></script>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\backend-laravel\resources\views/graphs/create.blade.php ENDPATH**/ ?>