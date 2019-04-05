<?php echo Form::open()
    ->fill($project)
    ->route($project->id ? 'admin.projects.update' : 'admin.projects.index', [$project])
    ->method($project->id ? 'PUT' : 'POST'); ?>


<div class="card">
    <div class="card-header">General</div>
    <div class="card-body">
        <div class="row">
            <div class="col-sm-4">
                <?php echo Form::text('id', 'ID')->readonly(); ?>

            </div>
            <div class="col-sm-4">
                <?php echo Form::text('name', 'Name'); ?>

            </div>
            <div class="col-sm-4">
                <?php echo Form::text('title', 'Title'); ?>

            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <?php echo Form::text('description', 'Description'); ?>

            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">Project</div>
    <div class="card-body">
        <div class="row">
            <div class="col-sm-3">
                <?php echo Form::select('status', 'Status', [0 => 'Finished', 1 => 'Under development', 2 => 'Paused']); ?>

            </div>
            <div class="col-sm-3">
                <?php echo Form::text('progress', 'Progress')->type('number'); ?>

            </div>
            <div class="col-sm-3">
                <?php echo Form::hidden('large', 0); ?>

                <?php echo Form::checkbox('large', 'Large'); ?>

            </div>
            <div class="col-sm-3">
                <?php echo Form::hidden('published', 0); ?>

                <?php echo Form::checkbox('published', 'Published', '1'); ?>

            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <?php echo Form::text('color', 'Color'); ?>

            </div>
            <div class="col-sm-4">
                <?php echo Form::text('technologies', 'Technologies'); ?>

            </div>
            <div class="col-sm-4">
                <?php echo Form::text('version', 'Version'); ?>

            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <?php echo Form::select('category_id', 'Category', $categories); ?>

            </div>
            <div class="col-sm-4">
                <?php echo Form::select('contributors', 'Contributors', $contributors)->multiple(); ?>

            </div>
            <div class="col-sm-4">
                <?php echo Form::text('creation_date', 'Creation date'); ?>

            </div>
        </div>
        <?php echo Form::textarea('about', 'About'); ?>

    </div>
</div>

<div class="card">
    <div class="card-header">URLs</div>
    <div class="card-body">
        <div class="row">
            <div class="col-sm-12">
                <?php echo Form::text('website_url', 'Website')->type('url'); ?>

            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <?php echo Form::text('background_image_url', 'Background image')->type('url'); ?>

            </div>
            <div class="col-sm-6">
                <?php echo Form::text('youtube_video_id', 'Youtube video'); ?>

            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <?php echo Form::text('downloads_url', 'Downloads')->type('url'); ?>

            </div>
            <div class="col-sm-6">
                <?php echo Form::text('report_url', 'Report')->type('url'); ?>

            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <?php echo Form::text('github_repo_username', 'Repo username'); ?>

            </div>
            <div class="col-sm-6">
                <?php echo Form::text('github_repo_username', 'Repo name'); ?>

            </div>
        </div>
    </div>
</div>

<?php echo Form::submit($project->id ? 'Update' : 'Create'); ?>

<?php echo Form::close(); ?>

