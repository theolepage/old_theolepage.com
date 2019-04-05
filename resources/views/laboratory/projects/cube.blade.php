<a  href="/lab/{{ $project->name }}"
    class="experiment @if ($project->large) experiment_large @endif">

    <div class="experiment-cube">

        <div class="experiment-cube-face experiment-cube-front">
            <div class="experiment-id">#{{ $project->getId() }}</div>
            <div class="experiment-corner">
                @if ($project->status == 1)
                    <div class="experiment-corner-wip"></div>
                @endif
            </div>
            <div class="experiment-letter" style="color: <?= $project->color ?>">{{ $project->getLetter() }}</div>
            <div class="experiment-title">{{ $project->getTitle() }}</div>
            <div class="experiment-labels">@include('laboratory.categories.show', ['icon' => true])</div>
        </div>

        <div class="experiment-cube-face experiment-cube-side">
            <div class="experiment-description">{{ $project->description }}</div>
        </div>

    </div>

</a>
