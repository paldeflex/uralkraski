<div class="card">
    <div class="card-header">{{ $title }}</div>
    @if ($slot->isEmpty())
        Пожалуйста заполните карточку
    @else
        {{ $slot }}
    @endif
    <div class="card-footer">{{ $footer }}</div>
</div>
