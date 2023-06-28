<?php $__env->startSection('content'); ?>

    <div class="d-flex justify-content-between mb-4">
        <h3>Library List</h3>
        <a href="<?php echo e(route('create')); ?>" class="btn btn-success btn-sm">New Create</a>
    </div>

    <?php if(session()->has('success')): ?>
        <label for="" class="alert alert-success w-100"><?php echo e(session('success')); ?></label>
    <?php elseif(session()->has('error')): ?>
        <label for="" class="alert alert-danger w-100"><?php echo e(session('error')); ?></label>
    <?php endif; ?>






    <form action="<?php echo e(route('timkiem')); ?>" method="GET" class="form-inline justify-content-between d-flex col-md-4 " role="form">
        <div class="form-group col-md-10">
            <input  name="key" class="form-control" placeholder="Search By Name...">
        </div>
        <button type="submit" class="btn btn-primary">
            <i class="fas fa-search"></i>
        </button>
    </form>




    <br>

    <table class="table table-striped">
        <thead>
        <tr>
            <th>Book ID</th>
            <th>Author ID</th>
            <th>Title</th>
            <th>ISBN</th>
            <th>Pug Year</th>
            <th>Available</th>
        </tr>
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($book->bookid); ?></td>
                <td><?php echo e($book->authorid); ?></td>
                <td><?php echo e($book->title); ?></td>
                <td><?php echo e($book->ISBN); ?></td>
                <td><?php echo e($book->pub_year); ?></td>
                <td><?php echo e($book->available); ?></td>




            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>

    </table>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel1\resources\views/index.blade.php ENDPATH**/ ?>