
<?php echo $__env->yieldContent('content'); ?>
<div class="container mt-5">
    
    <div class="row">
        <div class="col-6">
            <h3 class="text-primary">Create student management system</h3>
        </div>
        <div class="col-6">
            <a href="<?php echo e(route('student.index')); ?>" class="btn btn-danger create_student"><i class="fa fa-backward"></i> Back</a>
        </div>
        <form action="<?php echo e(route('student.store')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="col-md-12 mt-5">
                <div class="form-group">
                    <label for="firstname">First name</label>
                    <input type="text" name="firstname" id="firstname" class="form-control" value="<?php echo e(old('firstname')); ?>">
                    <?php if($errors->has('firstname')): ?>
                    <span class="text-danger"><?php echo e($errors->first('firstname')); ?></span>
                    <?php endif; ?>
                </div>
                <div class="form-group mt-2">
                    <label for="lastname">Last name</label>
                    <input type="text" name="lastname" id="lastname" class="form-control" value="<?php echo e(old('lastname')); ?>">
                    <?php if($errors->has('lastname')): ?>
                    <span class="text-danger"><?php echo e($errors->first('lastname')); ?></span>
                    <?php endif; ?>
                </div>
                <div class="form-group mt-2">
                    <label for="dob">Date of birth</label>
                    <input type="date" name="dob" id="dob" class="form-control" value="<?php echo e(old('dob')); ?>">
                    <?php if($errors->has('dob')): ?>
                    <span class="text-danger"><?php echo e($errors->first('dob')); ?></span>
                    <?php endif; ?>
                </div>
                <div class="form-group mt-2">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" class="form-control" value="<?php echo e(old('email')); ?>">
                    <?php if($errors->has('email')): ?>
                    <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
                    <?php endif; ?>
                </div>
                <div class="form-group mt-2">
                    <label for="course">Course</label>
                    <select name="course" id="course" class="form-control">
                        <option value=""></option>
                        <option value="B.Sc" <?php echo e(old('course') == 'B.Sc' ? 'selected' : ''); ?>>B.Sc</option>
                        <option value="B.A" <?php echo e(old('course') == 'B.A' ? 'selected' : ''); ?>>B.A</option>
                        <option value="BBA" <?php echo e(old('course') == 'BBA' ? 'selected' : ''); ?>>BBA</option>
                        <option value="B.Com" <?php echo e(old('course') == 'B.Com' ? 'selected' : ''); ?>>B.Com</option>
                    </select>
                    <?php if($errors->has('course')): ?>
                    <span class="text-danger"><?php echo e($errors->first('course')); ?></span>
                    <?php endif; ?>
                </div>
                <div class="form-group mt-2">
                    <label for="major">Major</label>
                    <select name="major" id="major" class="form-control">
                        <option value=""></option>
                        <option value="Computer Science" <?php echo e(old('major') == 'Computer Science' ? 'selected' : ''); ?>>Computer Science</option>
                        <option value="Mathematics" <?php echo e(old('major') == 'Mathematics' ? 'selected' : ''); ?>>Mathematics</option>
                        <option value="Computer Applications" <?php echo e(old('major') == 'Computer Applications' ? 'selected' : ''); ?>>Computer Applications</option>
                        <option value="Physics" <?php echo e(old('major') == 'Physics' ? 'selected' : ''); ?>>Physics</option>
                        <option value="Chemistry" <?php echo e(old('major') == 'Chemistry' ? 'selected' : ''); ?>>Chemistry</option>
                        <option value="Tamil" <?php echo e(old('major') == 'Tamil' ? 'selected' : ''); ?>>Tamil</option>
                    </select>
                    <?php if($errors->has('major')): ?>
                    <span class="text-danger"><?php echo e($errors->first('major')); ?></span>
                    <?php endif; ?>
                </div>
                <div class="form-group mt-2">
                    <label for="email">Phone Number</label>
                    <input type="number" name="phone" id="phone" class="form-control" value="<?php echo e(old('phone')); ?>">
                    <?php if($errors->has('phone')): ?>
                    <span class="text-danger"><?php echo e($errors->first('phone')); ?></span>
                    <?php endif; ?>
                </div>
                <div class="form-group mt-2">
                    <label for="email">Address</label>
                    <input type="text" name="address" id="address" class="form-control" value="<?php echo e(old('address')); ?>">
                    <?php if($errors->has('address')): ?>
                    <span class="text-danger"><?php echo e($errors->first('address')); ?></span>
                    <?php endif; ?>
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-success btn-block form-control">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\learn_crud\resources\views/create.blade.php ENDPATH**/ ?>