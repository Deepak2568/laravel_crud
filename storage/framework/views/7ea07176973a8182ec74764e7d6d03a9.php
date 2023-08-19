
<?php echo $__env->yieldContent('content'); ?>
<div class="container mt-5">
    <div class="row">
        <?php if(session()->has('message')): ?>
            <div class="alert alert-success">
                <?php echo e(session()->get('message')); ?>

            </div>
        <?php endif; ?>
        <div class="col-6">
            <h3 class="text-primary">Student management system</h3>
        </div>
        <div class="col-6">
            <a href="<?php echo e(route('student.create')); ?>" class="btn btn-success create_student"><i class="fa fa-plus"></i> Create Student</a>
        </div>
        <div class="col-md-12 mt-5">
            <table class="table table-bordered text-center">
                <tr>
                    <th>S No</th>
                    <th>Name</th>
                    <th>DOB</th>
                    <th>Email</th>
                    <th>Course</th>
                    <th>Phone Number</th>
                    <th>Address</th>
                    <th colspan='3'></th>
                </tr>
                <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($key + 1); ?></td>
                    <td><?php echo e($student->firstname.' '.$student->lastname); ?></td>
                    <td><?php echo e($student->dob); ?></td>
                    <td><?php echo e($student->email); ?></td>
                    <td><?php echo e($student->course.' '.$student->major); ?></td>
                    <td><?php echo e($student->phone); ?></td>
                    <td><?php echo e($student->address); ?></td>
                    <td><button class="btn btn-primary"><i class='fa fa-eye'></i> Show</button></td>
                    <td><button class="btn btn-success"><i class='fa fa-edit'></i> Edit</button></td>
                    <td><button class="btn btn-danger"><i class='fa fa-trash'></i> Delete</button></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
        </div>
    </div>
</div>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\laravel_crud\resources\views/index.blade.php ENDPATH**/ ?>