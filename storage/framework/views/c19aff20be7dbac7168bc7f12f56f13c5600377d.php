<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Employee</h2>
            <a href="<?php echo e(route('employees.index')); ?>" class="btn btn-info">All Employees</a>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="<?php echo e(route('employees.index')); ?>"> Back</a>
        </div>
    </div>
</div>

<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>

<form class="mt-3" action="<?php echo e(route('employees.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>

     <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>E-Mail:</strong>
                <input type="email" name="email" class="form-control" placeholder="E-Mail">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Specialization:</strong>
                <input type="text" name="specialization" class="form-control" placeholder="Specialization">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Phone:</strong>
                <input type="number" name="phone" class="form-control" placeholder="Phone">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Salary:</strong>
                <input type="number" name="salary" class="form-control" placeholder="Salary">
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">
                <button type="submit" class="btn btn-success">Insert</button>
        </div>


    </div>

</form>




    <?php $__env->stopSection(); ?>

<?php echo $__env->make('employees.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-crud\resources\views/employees/create.blade.php ENDPATH**/ ?>