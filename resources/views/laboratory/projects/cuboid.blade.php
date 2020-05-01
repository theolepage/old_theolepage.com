<a  href="/lab/{{ $project->name }}" class="project">

    <div class="project-line" style="background: <?= $project->color ?>;"></div>

    <div class="project-corner">
        @if ($project->status == 1)
            <div class="project-corner-wip"></div>
        @endif
    </div>

    <div class="project-title">{{ $project->getTitle() }}</div>

    <div class="project-description">{{ $project->description }}</div>

    <div class="project-footer">
        <div class="project-id">#{{ $project->getId() }}</div>
    </div>

</a>
