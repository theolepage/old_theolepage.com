<?php $__env->startSection('title', $project->getTitle()); ?>

<?php $__env->startSection('content'); ?>

<div class="lab_narrow">

    <div class="lab-info">

        <div class="lab-info-title">
            <div class="lab-title"><?php echo e($project->getTitle()); ?></div>
            <div class="lab-subtitle"><?php echo e($project->description); ?></div>
        </div>

        <?php if(!empty($project->website_url) || !empty($project->github_repo_name)): ?>
            <div class="lab-buttons">
                <?php if(!empty($project->website_url)): ?>
                    <a
                        class="lab-button lab-button_green"
                        target="_blank" rel="noopener"
                        href="<?php echo e($project->website_url); ?>">
                        Website
                    </a>
                <?php endif; ?>

                <?php if(!empty($project->github_repo_name)): ?>
                    <a
                        class="lab-button"
                        target="_blank" rel="noopener"
                        href="https://github.com/<?php echo e($project->github_repo_username); ?>/<?php echo e($project->github_repo_name); ?>">
                        Source
                    </a>
                    <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>

    <div class="lab-sections">

        <?php if($project->youtube_video_id): ?>
            <div class="lab-section lab-section_large">

                <div class="lab-section-title">Video</div>

                <div class="lab-video">
                    <iframe
                        width="560" height="315"
                        src="https://www.youtube.com/embed/<?php echo e($project->youtube_video_id); ?>?controls=0&autoplay=1&loop=1&showinfo=0&mute=1&playlist=<?php echo e($project->youtube_video_id); ?>"
                        frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                    </iframe>
                </div>
            </div>
        <?php elseif($project->background_image_url): ?>
            <div class="lab-section lab-section_large">
                <div class="lab-section-title">Screenshot</div>

                <div style="background-image: url('<?php echo e($project->background_image_url); ?>')" class="lab-screenshot"></div>
            </div>
        <?php endif; ?>

        <div class="lab-section">
            <div class="lab-section-title">General</div>

            <div class="lab-spec">
                <div class="lab-spec-name">ID</div>
                <div class="lab-spec-value">#<?php echo e($project->getId()); ?></div>
            </div>
            <div class="lab-spec">
                <div class="lab-spec-name">Name</div>
                <div class="lab-spec-value"><?php echo e($project->name); ?></div>
            </div>
            <div class="lab-spec">
                <div class="lab-spec-name">Title</div>
                <div class="lab-spec-value"><?php echo e($project->getTitle()); ?></div>
            </div>
            <div class="lab-spec">
                <div class="lab-spec-name">Type</div>
                <div class="lab-spec-value"><?php echo $__env->make('laboratory.categories.show', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?></div>
            </div>
            <div class="lab-spec">
                <div class="lab-spec-name">Color</div>
                <div class="lab-spec-value"><?php echo e($project->color); ?></div>
            </div>
        </div>

        <div class="lab-section">
            <div class="lab-section-title">Cube</div>

            <?php echo $__env->make('laboratory.projects.cube', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>

        <div class="lab-section">
            <div class="lab-section-title">Project</div>

            <div class="lab-spec">
                <div class="lab-spec-name">Creation date</div>
                <div class="lab-spec-value"><?php echo e($project->getCreationDate()); ?></div>
            </div>
            <div class="lab-spec">
                <div class="lab-spec-name">Progress</div>
                <div class="lab-spec-value">
                    <?php if($project->progress < 0): ?>
                        Ongoing
                    <?php else: ?>
                        <?php echo e($project->progress); ?>%
                    <?php endif; ?>
                </div>
            </div>
            <div class="lab-spec">
                <div class="lab-spec-name">Current version</div>
                <div class="lab-spec-value">
                    <?php if(empty($project->version)): ?>
                        None
                    <?php else: ?>
                        <?php echo e($project->version); ?>

                    <?php endif; ?>
                </div>
            </div>
            <div class="lab-spec">
                <div class="lab-spec-name">Status</div>
                <div class="lab-spec-value <?php if($project->status != 0): ?> lab-spec-value_alert <?php endif; ?>">
                    <?php if($project->status == 1): ?>
                        Under development
                    <?php elseif($project->status == 0): ?>
                        Finished
                    <?php elseif($project->status == 2): ?>
                        Paused
                    <?php endif; ?>
                </div>
            </div>
            <div class="lab-spec">
                <div class="lab-spec-name">Updated at</div>
                <div class="lab-spec-value timeago" datetime="<?php echo e($project->updated_at->format(\DateTime::ISO8601)); ?>">
                    <?php echo e($project->updated_at); ?>

                </div>
            </div>
            <div class="lab-spec">
                <div class="lab-spec-name">Authors</div>
                <div class="lab-spec-value">
                    <div class="project-authors">
                        <?php $__currentLoopData = $project->contributors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contributor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php echo $__env->make('laboratory.contributors.show', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="lab-section">
            <div class="lab-section-title">Technical</div>

            <div class="lab-spec">
                <div class="lab-spec-name">Open source</div>
                <div class="lab-spec-value"><?php if(empty($project->github_repo_name)): ?> No <?php else: ?> Yes <?php endif; ?></div>
            </div>
            <div class="lab-spec">
                <div class="lab-spec-name">Technologies</div>
                <div class="lab-spec-value">
                    <?php if(empty($project->technologies)): ?>
                        None
                    <?php else: ?>
                        <?php echo e($project->technologies); ?>

                    <?php endif; ?>
                </div>
            </div>
            <div class="lab-spec">
                <div class="lab-spec-name">Downloads</div>
                <div class="lab-spec-value">
                    <?php if(empty($project->downloads_url)): ?>
                        None
                    <?php else: ?>
                        <a target="_blank" rel="noopener" href="<?php echo e($project->downloads_url); ?>">See downloads</a>
                    <?php endif; ?>
                </div>
            </div>
            <div class="lab-spec">
                <div class="lab-spec-name">Report</div>
                <div class="lab-spec-value">
                    <?php if(empty($project->report_url)): ?>
                        None
                    <?php else: ?>
                        <a target="_blank" rel="noopener" href="<?php echo e($project->report_url); ?>">See report</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <?php if($project->github_repo_name): ?>
            <div class="lab-section">
                <div class="lab-section-title">Activity</div>
                <canvas data-graph="<?php echo e(json_encode($activityGraph)); ?>" id="lab-activity" width="50%" height="25"></canvas>
            </div>
        <?php endif; ?>

        <?php if($project->about): ?>
            <div class="lab-section lab-section_large">
                <div class="lab-section-title">About</div>

                <div class="lab-section-content">
                    <?php if(empty($project->about)): ?>
                        None
                    <?php else: ?>
                        <?php echo $project->getAbout(); ?>

                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>