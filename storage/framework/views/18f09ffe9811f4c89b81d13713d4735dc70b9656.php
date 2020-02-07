<?php if($contributor->website_url): ?>
    <a class="lab-contributor" href="<?php echo e($contributor->website_url); ?>" target="_blank" rel="noopener">
        <img class="lab-contributor-picture" src="<?php echo e($contributor->picture_url ?? "/images/avatar.png"); ?>" alt="contributor-picture">
        <span class="lab-contributor-name"><?php echo e($contributor->getFirstname()); ?></span>
        <span class="lab-contributor-name"><?php echo e($contributor->getLastname()); ?></span>
    </a>
<?php else: ?>
    <div class="lab-contributor">
        <img class="lab-contributor-picture" src="<?php echo e($contributor->picture_url ?? "/images/avatar.png"); ?>" alt="contributor-picture">
        <span class="lab-contributor-name"><?php echo e($contributor->getFirstname()); ?></span>
        <span class="lab-contributor-name"><?php echo e($contributor->getLastname()); ?></span>
    </div>
<?php endif; ?>
