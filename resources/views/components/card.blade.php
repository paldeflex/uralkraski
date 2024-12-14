@props(['color', 'bgColor' => 'white'])

<div {{ $attributes->class("card card-text-$color card-bg-$bgColor") }}>
    <div class="card-header">{{ $title }}</div>
    @if ($slot->isEmpty())
        Пожалуйста заполните карточку
    @else
        {{ $slot }}
    @endif
    <div class="card-footer">{{ $footer }}</div>
</div>
