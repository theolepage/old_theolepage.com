<span style="color: {{ $project->category->color }}">
    @if (isset($lab))
        {{ strtoupper($project->category->name) }}
    @else
        {{ strtoupper($project->category->name) }}
    @endif
</span>
