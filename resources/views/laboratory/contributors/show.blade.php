@if ($contributor->website_url)
    <a class="experiment-contributor" href="{{ $contributor->website_url }}" target="_blank" rel="noopener">
        <img class="experiment-contributor-picture" src="{{ $contributor->picture_url ?? "/images/avatar.png" }}" alt="contributor-picture">
        <span class="experiment-contributor-name">{{ $contributor->getFirstname() }}</span>
        <span class="experiment-contributor-name">{{ $contributor->getLastname() }}</span>
    </a>
@else
    <div class="experiment-contributor">
        <img class="experiment-contributor-picture" src="{{ $contributor->picture_url ?? "/images/avatar.png" }}" alt="contributor-picture">
        <span class="experiment-contributor-name">{{ $contributor->getFirstname() }}</span>
        <span class="experiment-contributor-name">{{ $contributor->getLastname() }}</span>
    </div>
@endif
