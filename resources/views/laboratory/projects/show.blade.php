@extends('layouts.app')

@section('title', $project->getTitle())

@section('content')

<div class="lab wrapper">

    <div class="lab-header">

        <div class="lab-header-info">
            <div class="heading-title" style="color: {{ $project->color }}">{{ $project->getTitle() }}</div>
            <div class="heading-subtitle">{{ $project->description }}</div>
        </div>

        @if (!empty($project->website_url) || !empty($project->github_repo_name))
            <div class="lab-header-buttons">
                @if (!empty($project->website_url))
                    <a
                        class="lab-header-button lab-header-button_green"
                        target="_blank" rel="noopener"
                        href="{{ $project->website_url }}">
                        Website
                    </a>
                @endif

                @if (!empty($project->github_repo_name))
                    <a
                        class="lab-header-button"
                        target="_blank" rel="noopener"
                        href="https://github.com/{{ $project->github_repo_username }}/{{ $project->github_repo_name }}">
                        View on GitHub
                    </a>
                    @endif
            </div>
        @endif
    </div>

    <div class="lab-sections">

        @if ($project->youtube_video_id)
            <div class="lab-section lab-section_large">

                <div class="lab-section-title">Video</div>

                <div class="lab-video">
                    <iframe
                        width="560" height="315"
                        src="https://www.youtube.com/embed/{{ $project->youtube_video_id }}?controls=0&autoplay=1&loop=1&showinfo=0&mute=1&playlist={{ $project->youtube_video_id }}"
                        frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                    </iframe>
                </div>
            </div>
        @elseif ($project->screenshot_url)
            <div class="lab-section lab-section_large">
                <div class="lab-section-title">Screenshot</div>

                <img src="{{ $project->screenshot_url }}" class="lab-screenshot" alt="lab-screenshot">
            </div>
        @endif

        <div class="lab-section">
            <div class="lab-section-title">General</div>

            <div class="lab-spec">
                <div class="lab-spec-name">ID</div>
                <div class="lab-spec-value">#{{ $project->getId() }}</div>
            </div>
            <div class="lab-spec">
                <div class="lab-spec-name">Name</div>
                <div class="lab-spec-value">{{ $project->name }}</div>
            </div>
            <div class="lab-spec">
                <div class="lab-spec-name">Title</div>
                <div class="lab-spec-value">{{ $project->getTitle() }}</div>
            </div>
            <div class="lab-spec">
                <div class="lab-spec-name">Category</div>
                <div class="lab-spec-value">@include('laboratory.categories.show', ['lab' => true])</div>
            </div>
            <div class="lab-spec">
                <div class="lab-spec-name">Color</div>
                <div class="lab-spec-value">
                    <div class="lab-color" style="background: {{ $project->getColor() }};"></div>
                    {{ $project->getColor() }}
                </div>
            </div>
        </div>

        <div class="lab-section">
            <div class="lab-section-title">Cuboid</div>

            @include('laboratory.projects.cuboid')
        </div>

        <div class="lab-section">
            <div class="lab-section-title">Project</div>

            <div class="lab-spec">
                <div class="lab-spec-name">Status</div>
                <div class="lab-spec-value @if ($project->status != 0) lab-spec-value_alert @endif">
                    @if ($project->status == 1)
                        Under development
                    @elseif ($project->status == 0)
                        Finished
                    @elseif ($project->status == 2)
                        Paused
                    @endif
                </div>
            </div>
            <div class="lab-spec">
                <div class="lab-spec-name">Creation date</div>
                <div class="lab-spec-value">{{ $project->getCreationDate() }}</div>
            </div>
            <div class="lab-spec">
                <div class="lab-spec-name">Progress</div>
                <div class="lab-spec-value">
                    @if ($project->progress < 0)
                        Ongoing
                    @else
                        <div class="lab-progress">
                            <div class="lab-progress-bar" style="width: {{ $project->progress }}%"></div>
                            <div class="lab-progress-value">{{ $project->progress }}%</div>
                        </div>
                    @endif
                </div>
            </div>
            <div class="lab-spec">
                <div class="lab-spec-name">Last updated</div>
                <div class="lab-spec-value timeago" datetime="{{ $project->updated_at->format(\DateTime::ISO8601) }}">
                    {{ $project->updated_at }}
                </div>
            </div>
        </div>

        <div class="lab-section">
            <div class="lab-section-title">Technical</div>

            <div class="lab-spec">
                <div class="lab-spec-name">Open source</div>
                <div class="lab-spec-value">
                    <div class="lab-checkbox">
                        @if (!empty($project->github_repo_name))  <img class="lab-checkbox-mark" src="/images/icon-check.svg" alt="icon-check"> @endif
                    </div>
                </div>
            </div>
            <div class="lab-spec">
                <div class="lab-spec-name">Technologies</div>
                <div class="lab-spec-value">
                    @if (empty($project->technologies))
                        None
                    @else
                        {{ $project->technologies}}
                    @endif
                </div>
            </div>
            @if ($project->version)
            <div class="lab-spec">
                <div class="lab-spec-name">Latest version</div>
                <div class="lab-spec-value">{{ $project->version }}</div>
            </div>
            @endif
            @if ($project->downloads_url)
                <div class="lab-spec">
                    <div class="lab-spec-name">Downloads</div>
                    <div class="lab-spec-value">
                        <a target="_blank" rel="noopener" href="{{ $project->downloads_url }}">See downloads</a>
                    </div>
                </div>
            @endif
            @if ($project->report_url)
                <div class="lab-spec">
                    <div class="lab-spec-name">Report</div>
                    <div class="lab-spec-value">
                        <a target="_blank" rel="noopener" href="{{ $project->report_url }}">See report</a>
                    </div>
                </div>
            @endif
        </div>

        <div class="lab-section">
            <div class="lab-section-title">Team</div>

            <div class="lab-contributors">
                @foreach($project->contributors as $contributor)
                    @include('laboratory.contributors.show')
                @endforeach
            </div>
        </div>

        @if ($project->github_repo_name)
            <div class="lab-section">
                <div class="lab-section-title">Activity</div>
                <canvas data-graph="{{ json_encode($activityGraph) }}" id="lab-activity" width="50%" height="25"></canvas>
            </div>
        @endif

        @if ($project->about)
            <div class="lab-section lab-section_large">
                <div class="lab-section-title">About</div>

                <div class="lab-section-content">
                    @if (empty($project->about))
                        None
                    @else
                        {!! $project->getAbout() !!}
                    @endif
                </div>
            </div>
        @endif
    </div>

</div>

@endsection
