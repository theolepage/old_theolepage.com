<?php echo Form::open()
    ->fill($item)
    ->route($item->id ? 'admin.contributors.update' : 'admin.contributors.index', [$item])
    ->method($item->id ? 'PUT' : 'POST'); ?>


<div class="row">
    <div class="col-sm-6">
        <?php echo Form::text('name', 'Name'); ?>

    </div>
    <div class="col-sm-6">
        <?php echo Form::text('website_url', 'Website')->type('url'); ?>

    </div>
    <div class="col-sm-6">
        <?php echo Form::text('picture_url', 'Picture')->type('url'); ?>

    </div>
</div>

<?php echo Form::submit($item->id ? 'Update' : 'Create'); ?>

<?php echo Form::close(); ?>

