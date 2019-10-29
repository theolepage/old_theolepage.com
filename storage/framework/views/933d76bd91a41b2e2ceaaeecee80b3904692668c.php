<?php $__env->startSection('title', 'Settings'); ?>

<?php $__env->startSection('content'); ?>

    <h2>Settings</h2>

    <?php echo Form::open()
        ->fill($item)
        ->route('admin.settings', [$item])
        ->method('POST'); ?>


    <div class="card">
        <div class="card-header">Alert</div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-2">
                    <?php echo Form::hidden('alert_enabled', 0); ?>

                    <?php echo Form::checkbox('alert_enabled', 'Alert enabled', '1'); ?>

                </div>
                <div class="col-sm-10">
                    <?php echo Form::text('alert_text', 'Alert text'); ?>

                </div>
            </div>
        </div>
    </div>


    <?php echo Form::submit('Update'); ?>

    <?php echo Form::close(); ?>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>