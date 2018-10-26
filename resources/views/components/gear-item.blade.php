<li id="collection-template" class="collection-item">
    <a href="#!" class="remove"><span class="material-icons">clear</span></a>
    {{ $gear->name }}
    <a href="#!" class="item-inc"><span class="badge material-icons grey lighten-2">keyboard_arrow_up</span></a>
    <span class="new badge item-count" data-badge-caption="" data-value="{{ $gear->pivot->quantity }}">{{ $gear->pivot->quantity }}</span>
    <a href="#!" class="item-dec"><span class="badge material-icons grey lighten-2">keyboard_arrow_down</span></a>
</li>