<a  href="/lab/<?php echo e($project->name); ?>"
    class="experiment <?php if($project->large): ?> experiment_large <?php endif; ?>">

    <div class="experiment-cube">

        <div class="experiment-cube-face experiment-cube-front">
            <div class="experiment-id">#<?php echo e($project->getId()); ?></div>
            <div class="experiment-corner">
                <?php if($project->status == 1): ?>
                    <div class="experiment-corner-wip"></div>
                <?php endif; ?>
            </div>
            <div class="experiment-letter" style="color: <?= $project->color ?>"><?php echo e($project->getLetter()); ?></div>
            <div class="experiment-title"><?php echo e($project->getTitle()); ?></div>
            <div class="experiment-category"><?php echo $__env->make('laboratory.categories.show', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?></div>
        </div>

        <div class="experiment-cube-face experiment-cube-side">
            <div class="experiment-description"><?php echo e($project->description); ?></div>
        </div>

    </div>

</a>
