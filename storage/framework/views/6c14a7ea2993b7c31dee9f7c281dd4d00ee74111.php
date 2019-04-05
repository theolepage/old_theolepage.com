<?php $__env->startSection('content'); ?>

    <h2>Categories</h2>

    <p>
        <a href="<?php echo e(route('admin.categories.create')); ?>" class="btn btn-primary">Create</a>
    </p>

    <table class="table table-bordered">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($category->id); ?></td>
                <td><?php echo e($category->name); ?></td>
                <td>
                    <a href="<?php echo e(route('admin.categories.edit', ['id' => $category->id])); ?>" class="btn btn-primary">Edit</a>

                    <?php echo Form::open()
                        ->fill($category)
                        ->route('admin.categories.destroy', [$category])
                        ->method('DELETE')
                        ->attrs(['style' => 'display: inline']); ?>

                    <?php echo Form::submit('Delete')->attrs(['class' => 'btn btn-danger']); ?>

                    <?php echo Form::close(); ?>

                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>