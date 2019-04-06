<?php if($contributor->website_url): ?>
    <a class="experiment-contributor" href="<?php echo e($contributor->website_url); ?>" target="_blank" rel="noopener">
        <img class="experiment-contributor-picture" src="<?php echo e($contributor->picture_url ?? "/images/avatar.png"); ?>" alt="contributor-picture">
        <span class="experiment-contributor-name"><?php echo e($contributor->getFirstname()); ?></span>
        <span class="experiment-contributor-name"><?php echo e($contributor->getLastname()); ?></span>
    </a>
<?php else: ?>
    <div class="experiment-contributor">
        <img class="experiment-contributor-picture" src="<?php echo e($contributor->picture_url ?? "/images/avatar.png"); ?>" alt="contributor-picture">
        <span class="experiment-contributor-name"><?php echo e($contributor->getFirstname()); ?></span>
        <span class="experiment-contributor-name"><?php echo e($contributor->getLastname()); ?></span>
    </div>
<?php endif; ?>
