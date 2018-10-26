<div class="card-panel {{ $color }} lighten-4 z-depth-0">
    @foreach ( $contents as $line )
        <span class="{{ $color }}-text text-darken-4">{{ $line }}</span>
    @endforeach
</div>