<?php $__env->startSection('title', ucfirst($resource)); ?>

<?php $__env->startSection('content'); ?>

    <h2><?php echo e(ucfirst($resource)); ?></h2>

    <p style="margin: 40px 0 20px 0">
        <a href="<?php echo e(route('admin.' . $resource . '.create')); ?>" class="btn btn-primary btn-lg">Create</a>
    </p>

    <table class="table table-bordered">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($item->id); ?></td>
                <td><?php echo e($item->name); ?></td>
                <td>
                    <a href="<?php echo e(route('admin.' . $resource . '.edit', ['id' => $item->id])); ?>" class="btn btn-primary">Edit</a>
                </td>
                <td>
                    <?php echo Form::open()
                        ->fill($item)
                        ->route('admin.' . $resource . '.destroy', [$item])
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