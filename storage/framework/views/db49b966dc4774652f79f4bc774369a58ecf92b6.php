<?php echo Form::open()
    ->fill($contributor)
    ->route($contributor->id ? 'admin.contributors.update' : 'admin.contributors.index', [$contributor])
    ->method($contributor->id ? 'PUT' : 'POST'); ?>


<div class="row">
    <div class="col-sm-6">
        <?php echo Form::text('name', 'Name'); ?>

    </div>
    <div class="col-sm-6">
        <?php echo Form::text('website_url', 'Website'); ?>

    </div>
</div>

<?php echo Form::submit($contributor->id ? 'Update' : 'Create'); ?>

<?php echo Form::close(); ?>

