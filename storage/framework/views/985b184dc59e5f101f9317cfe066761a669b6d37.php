<a  href="/lab/<?php echo e($project->name); ?>"
    class="project <?php if($project->large): ?> project_large <?php endif; ?>">

    <div class="project-cuboid">

        <div class="project-cuboid-face project-cuboid-front">
            <div class="project-id">#<?php echo e($project->getId()); ?></div>
            <div class="project-corner">
                <?php if($project->status == 1): ?>
                    <div class="project-corner-wip"></div>
                <?php endif; ?>
            </div>

            <?php if($project->large): ?>
                <div class="project-category"><?php echo $__env->make('laboratory.categories.show', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?></div>
                <div class="project-content">
                    <div class="project-title" style="color: <?= $project->color ?>"><?php echo e($project->getTitle()); ?></div>
                    <div class="project-description"><?php echo e($project->description); ?></div>
                </div>
            <?php else: ?>
                <div class="project-title"><?php echo e($project->getTitle()); ?></div>
                <div class="project-letter" style="color: <?= $project->color ?>"><?php echo e($project->getLetter()); ?></div>
            <?php endif; ?>
        </div>

        <div class="project-cuboid-face project-cuboid-side">
            <?php if(!$project->large): ?>
                <div class="project-category"><?php echo $__env->make('laboratory.categories.show', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?></div>
                <div class="project-description"><?php echo e($project->description); ?></div>
            <?php endif; ?>
        </div>

    </div>

</a>
