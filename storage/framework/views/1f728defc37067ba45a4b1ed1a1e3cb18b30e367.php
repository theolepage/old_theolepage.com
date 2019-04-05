<?php if(empty($contributor->website_url)): ?>
    <span class="experiment-author"><?= $contributor->name ?></span>
<?php else: ?>
    <a href="<?php echo e($contributor->website_url); ?>" target="_blank" rel="noopener" class="experiment-author">
        <?php echo e($contributor->name); ?>

    </a>
<?php endif; ?>
