@if ($contributor->website_url)
    <a class="lab-contributor" href="{{ $contributor->website_url }}" target="_blank" rel="noopener">
        <img class="lab-contributor-picture" src="{{ $contributor->picture_url ?? "/images/avatar.png" }}" alt="contributor-picture">
        <span class="lab-contributor-name">{{ $contributor->getFirstname() }}</span>
        <span class="lab-contributor-name">{{ $contributor->getLastname() }}</span>
    </a>
@else
    <div class="lab-contributor">
        <img class="lab-contributor-picture" src="{{ $contributor->picture_url ?? "/images/avatar.png" }}" alt="contributor-picture">
        <span class="lab-contributor-name">{{ $contributor->getFirstname() }}</span>
        <span class="lab-contributor-name">{{ $contributor->getLastname() }}</span>
    </div>
@endif
