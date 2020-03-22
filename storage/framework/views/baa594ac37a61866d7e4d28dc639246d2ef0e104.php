<a  href="/lab/<?php echo e($project->name); ?>" class="project">

    <div class="project-corner">
        <?php if($project->status == 1): ?>
            <div class="project-corner-wip"></div>
        <?php endif; ?>
    </div>

    <div class="project-title" style="color: <?= $project->color ?>"><?php echo e($project->getTitle()); ?></div>
    <div class="project-description"><?php echo e($project->description); ?></div>

    <div class="project-footer">
        <div class="project-id">#<?php echo e($project->getId()); ?></div>
    </div>

</a>
