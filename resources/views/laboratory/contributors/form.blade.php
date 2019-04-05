{!! Form::open()
    ->fill($item)
    ->route($item->id ? 'admin.contributors.update' : 'admin.contributors.index', [$item])
    ->method($item->id ? 'PUT' : 'POST')
!!}

<div class="row">
    <div class="col-sm-6">
        {!! Form::text('name', 'Name') !!}
    </div>
    <div class="col-sm-6">
        {!! Form::text('website_url', 'Website')->type('url') !!}
    </div>
    <div class="col-sm-6">
        {!! Form::text('picture_url', 'Picture')->type('url') !!}
    </div>
</div>

{!! Form::submit($item->id ? 'Update' : 'Create') !!}
{!! Form::close() !!}
