@props(['value'])

<p {{ attributes->class('text-[0.8rem] font-medium text-red-500') }}>
    {{ $value ?? $slot }}
</p>
