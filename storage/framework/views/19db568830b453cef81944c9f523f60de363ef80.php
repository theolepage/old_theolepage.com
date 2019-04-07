<span style="color: <?php echo e($project->category->color); ?>">
    <?php if(isset($lab)): ?>
        <?php echo e(strtoupper($project->category->name)); ?>

    <?php else: ?>
        <?php echo e(strtoupper($project->category->name)); ?>

    <?php endif; ?>
</span>
