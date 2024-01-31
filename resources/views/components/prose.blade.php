@props(['markdown' => false])

<article {{ $attributes->class(['prose dark:prose-invert']) }}>
    @if($markdown)
        <x-hyde-ui::markdown>
            {{ $slot }}
        </x-hyde-ui::markdown>
    @else
        {{ $slot }}
    @endif
</article>
