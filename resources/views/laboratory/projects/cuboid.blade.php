<a  href="/lab/{{ $project->name }}"
    class="project @if ($project->large) project_large @endif">

    <div class="project-cuboid">

        <div class="project-cuboid-face project-cuboid-front">
            <div class="project-id">#{{ $project->getId() }}</div>
            <div class="project-corner">
                @if ($project->status == 1)
                    <div class="project-corner-wip"></div>
                @endif
            </div>

            @if ($project->large)
                <div class="project-category">@include('laboratory.categories.show')</div>
                <div class="project-content">
                    <div class="project-title" style="color: <?= $project->color ?>">{{ $project->getTitle() }}</div>
                    <div class="project-description">{{ $project->description }}</div>
                </div>
            @else
                <div class="project-title">{{ $project->getTitle() }}</div>
                <div class="project-letter" style="color: <?= $project->color ?>">{{ $project->getLetter() }}</div>
            @endif
        </div>

        <div class="project-cuboid-face project-cuboid-side">
            @if (!$project->large)
                <div class="project-category">@include('laboratory.categories.show')</div>
                <div class="project-description">{{ $project->description }}</div>
            @endif
        </div>

    </div>

</a>
