<div class="experiment-label"
    style="color: <?php echo e($project->category->color); ?>">
    <?php if(isset($icon)): ?>
        <?php echo e(strtoupper($project->category->name[0])); ?>

    <?php else: ?>
        <?php echo e(strtoupper($project->category->name)); ?>

    <?php endif; ?>

</div>
