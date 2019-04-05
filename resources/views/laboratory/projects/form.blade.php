{!! Form::open()
    ->fill($item)
    ->route($item->id ? 'admin.projects.update' : 'admin.projects.index', [$item])
    ->method($item->id ? 'PUT' : 'POST')
!!}

<div class="card">
    <div class="card-header">General</div>
    <div class="card-body">
        <div class="row">
            <div class="col-sm-4">
                {!! Form::text('id', 'ID')->readonly() !!}
            </div>
            <div class="col-sm-4">
                {!! Form::text('name', 'Name') !!}
            </div>
            <div class="col-sm-4">
                {!! Form::text('title', 'Title') !!}
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                {!! Form::text('description', 'Description') !!}
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">Project</div>
    <div class="card-body">
        <div class="row">
            <div class="col-sm-3">
                {!! Form::select('status', 'Status', [0 => 'Finished', 1 => 'Under development', 2 => 'Paused']) !!}
            </div>
            <div class="col-sm-3">
                {!! Form::text('progress', 'Progress')->type('number') !!}
            </div>
            <div class="col-sm-3">
                {!! Form::hidden('large', 0) !!}
                {!! Form::checkbox('large', 'Large', '1') !!}
            </div>
            <div class="col-sm-3">
                {!! Form::hidden('published', 0) !!}
                {!! Form::checkbox('published', 'Published', '1') !!}
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                {!! Form::text('color', 'Color')->attrs(['class' => 'colorpicker']) !!}
            </div>
            <div class="col-sm-4">
                {!! Form::text('technologies', 'Technologies') !!}
            </div>
            <div class="col-sm-4">
                {!! Form::text('version', 'Version') !!}
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                {!! Form::select('category_id', 'Category', $categories) !!}
            </div>
            <div class="col-sm-4">
                {!!
                    Form::select('contributors', 'Contributors', $contributors)
                    ->multiple()
                    ->attrs(['data-initial' => (!empty($currentContributors)) ? json_encode($currentContributors) : null ])
                !!}
            </div>
            <div class="col-sm-4">
                {!! Form::text('creation_date', 'Creation date')->attrs(['class' => 'datepicker']) !!}
            </div>
        </div>
        {!! Form::textarea('about', 'About')->attrs(['class' => 'mdeditor']) !!}
    </div>
</div>

<div class="card">
    <div class="card-header">URLs</div>
    <div class="card-body">
        <div class="row">
            <div class="col-sm-12">
                {!! Form::text('website_url', 'Website')->type('url') !!}
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                {!! Form::text('screenshot_url', 'Screenshot') !!}
            </div>
            <div class="col-sm-6">
                {!! Form::text('youtube_video_id', 'Youtube video') !!}
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                {!! Form::text('downloads_url', 'Downloads')->type('url') !!}
            </div>
            <div class="col-sm-6">
                {!! Form::text('report_url', 'Report')->type('url') !!}
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                {!! Form::text('github_repo_username', 'Repo username') !!}
            </div>
            <div class="col-sm-6">
                {!! Form::text('github_repo_name', 'Repo name') !!}
            </div>
        </div>
    </div>
</div>

{!! Form::submit($item->id ? 'Update' : 'Create') !!}
{!! Form::close() !!}
