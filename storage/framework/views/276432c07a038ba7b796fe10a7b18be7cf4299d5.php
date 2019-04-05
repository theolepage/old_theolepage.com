<?php echo Form::open()
    ->fill($category)
    ->route($category->id ? 'admin.categories.update' : 'admin.categories.index', [$category])
    ->method($category->id ? 'PUT' : 'POST'); ?>


<div class="row">
    <div class="col-sm-6">
        <?php echo Form::text('name', 'Name'); ?>

    </div>
    <div class="col-sm-6">
        <?php echo Form::text('color', 'Color'); ?>

    </div>
</div>

<?php echo Form::submit($category->id ? 'Update' : 'Create'); ?>

<?php echo Form::close(); ?>

