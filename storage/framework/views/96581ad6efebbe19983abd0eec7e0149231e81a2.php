<div class="form-group <?php if($errors->first($name)): ?> has-danger <?php endif; ?>">
    <?php echo Form::label($name, ucfirst($name)); ?>

    <?php echo Form::text($name, null, ['class' => 'form-control', 'readonly' => 'true']); ?>

    <?php if($errors->first($name)): ?>
        <small class="form-control-feedback"><?php echo e($errors->first($name)); ?></small>
    <?php endif; ?>
</div>
