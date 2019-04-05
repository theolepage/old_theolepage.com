<div class="experiment-label"
    style="color: {{ $project->category->color }}">
    @if (isset($icon))
        {{ strtoupper($project->category->name[0]) }}
    @else
        {{ strtoupper($project->category->name) }}
    @endif

</div>
