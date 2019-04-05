<?php $__env->startSection('content'); ?>

    <h2>Projects</h2>

    <p>
        <a href="<?php echo e(route('admin.projects.create')); ?>" class="btn btn-primary">Create</a>
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
        <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($project->id); ?></td>
                <td><?php echo e($project->name); ?></td>
                <td>
                    <a href="<?php echo e(route('admin.projects.edit', ['id' => $project->id])); ?>" class="btn btn-primary">Edit</a>

                    <?php echo Form::model($project, ['method' => 'DELETE', 'route' => ['admin.projects.destroy', $project], 'style' => 'display:inline;']); ?>

                    <?php echo Form::submit('Delete', ['class' => 'btn btn-danger']); ?>

                    <?php echo Form::close(); ?>

                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>