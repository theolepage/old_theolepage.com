<div class="experiment-contributor">
    <img class="experiment-contributor-picture" src="<?php echo e($contributor->picture_url ?? "/images/avatar.png"); ?>" alt="contributor-picture">

    <?php if($contributor->website_url): ?>
        <a class="experiment-contributor-name" href="<?php echo e($contributor->website_url); ?>" target="_blank" rel="noopener"><?php echo e($contributor->name); ?></a>
    <?php else: ?>
        <span class="experiment-contributor-name"><?php echo e($contributor->name); ?></span>
    <?php endif; ?>
</div>
