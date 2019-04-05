<div class="experiment-contributor">
    <img class="experiment-contributor-picture" src="{{ $contributor->picture_url ?? "/images/avatar.png" }}" alt="contributor-picture">

    @if ($contributor->website_url)
        <a class="experiment-contributor-name" href="{{ $contributor->website_url }}" target="_blank" rel="noopener">{{ $contributor->name }}</a>
    @else
        <span class="experiment-contributor-name">{{ $contributor->name }}</span>
    @endif
</div>
