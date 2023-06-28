<?php $__env->startSection('content'); ?>

    <div class="d-flex justify-content-between mb-4">
        <h3>Create Book</h3>
        <a href="<?php echo e(route('index')); ?>" class="btn btn-success btn-sm">List Book</a>
    </div>

    <?php if(session()->has('success')): ?>
        <label for="" class="alert alert-success w-100"><?php echo e(session('success')); ?></label>
    <?php elseif(session()->has('error')): ?>
        <label for="" class="alert alert-danger w-100"><?php echo e(session('error')); ?></label>
    <?php endif; ?>

    <form action="<?php echo e(route('store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label>Author ID</label>
            <input type="text" name="authorid" class="form-control" placeholder="author id">
        </div>
        <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" class="form-control" placeholder="title">
        </div>
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>ISBN</label>
                            <input type="text" name="ISBN" class="form-control" placeholder="ISBN">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Pug Year</label>
                            <input type="text" name="pub_year" class="form-control" placeholder="pub year">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label>Available</label>
            <input type="text" name="available" class="form-control" placeholder="available">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>

    </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PHP_Laravel\Laravel1\resources\views/create.blade.php ENDPATH**/ ?>