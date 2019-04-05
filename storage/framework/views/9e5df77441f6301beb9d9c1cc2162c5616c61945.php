<?php $__env->startSection('content'); ?>

    <h2>Contributors</h2>

    <p>
        <a href="<?php echo e(route('admin.contributors.create')); ?>" class="btn btn-primary">Create</a>
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
        <?php $__currentLoopData = $contributors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contributor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($contributor->id); ?></td>
                <td><?php echo e($contributor->name); ?></td>
                <td>
                    <a href="<?php echo e(route('admin.contributors.edit', ['id' => $contributor->id])); ?>" class="btn btn-primary">Edit</a>

                    <?php echo Form::open()
                        ->fill($contributor)
                        ->route('admin.contributors.destroy', [$contributor])
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