<?php echo Form::open()
    ->fill($item)
    ->route($item->id ? 'admin.categories.update' : 'admin.categories.index', [$item])
    ->method($item->id ? 'PUT' : 'POST'); ?>


<div class="row">
    <div class="col-sm-6">
        <?php echo Form::text('name', 'Name'); ?>

    </div>
    <div class="col-sm-6">
        <?php echo Form::text('color', 'Color')->attrs(['class' => 'colorpicker']); ?>

    </div>
</div>

<?php echo Form::submit($item->id ? 'Update' : 'Create'); ?>

<?php echo Form::close(); ?>

