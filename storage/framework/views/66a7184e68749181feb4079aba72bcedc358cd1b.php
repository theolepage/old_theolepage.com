<?php echo Form::model($project, [
        'route' => $project->id ? ['admin.projects.update', $project] : 'admin.projects.index',
        'method' => $project->id ? 'PUT' : 'POST'
    ]); ?>


<div class="card">
    <div class="card-header">General</div>
    <div class="card-body">
        <div class="row">
            <div class="col-sm-4">
                <?php echo $__env->make('helpers.forms.text', ['name' => 'id'], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
            <div class="col-sm-4">
                <?php echo $__env->make('helpers.forms.text', ['name' => 'name'], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
            <div class="col-sm-4">
                <?php echo $__env->make('helpers.forms.text', ['name' => 'title'], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <?php echo $__env->make('helpers.forms.text', ['name' => 'description'], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">Project</div>
    <div class="card-body">
        <div class="row">
            <div class="col-sm-3">
                <?php echo $__env->make('helpers.forms.text', ['name' => 'status'], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
            <div class="col-sm-3">
                <?php echo $__env->make('helpers.forms.text', ['name' => 'progress'], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
            <div class="col-sm-3">
                <?php echo $__env->make('helpers.forms.text', ['name' => 'large'], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
            <div class="col-sm-3">
                <?php echo $__env->make('helpers.forms.text', ['name' => 'published'], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <?php echo $__env->make('helpers.forms.text', ['name' => 'color'], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
            <div class="col-sm-4">
                <?php echo $__env->make('helpers.forms.text', ['name' => 'technologies'], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
            <div class="col-sm-4">
                <?php echo $__env->make('helpers.forms.text', ['name' => 'version'], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <?php echo $__env->make('helpers.forms.text', ['name' => 'category_id'], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
            <div class="col-sm-6">
                <?php echo $__env->make('helpers.forms.text', ['name' => 'creation_date'], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </div>
        <?php echo $__env->make('helpers.forms.textarea', ['name' => 'about'], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
</div>

<div class="card">
    <div class="card-header">URLs</div>
    <div class="card-body">
        <div class="row">
            <div class="col-sm-12">
                <?php echo $__env->make('helpers.forms.text', ['name' => 'website_url'], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <?php echo $__env->make('helpers.forms.text', ['name' => 'background_image_url'], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
            <div class="col-sm-6">
                <?php echo $__env->make('helpers.forms.text', ['name' => 'youtube_video_id'], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <?php echo $__env->make('helpers.forms.text', ['name' => 'downloads_url'], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
            <div class="col-sm-6">
                <?php echo $__env->make('helpers.forms.text', ['name' => 'report_url'], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <?php echo $__env->make('helpers.forms.text', ['name' => 'github_repo_username'], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
            <div class="col-sm-6">
                <?php echo $__env->make('helpers.forms.text', ['name' => 'github_repo_name'], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </div>
    </div>
</div>

<?php echo Form::submit($project->id ? 'Update' : 'Create', ['class' => 'btn btn-primary']); ?>

<?php echo Form::close(); ?>

