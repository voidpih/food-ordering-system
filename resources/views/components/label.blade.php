@props(['value'])

<label {{ $attributes->class(['text-slate-900 text-sm font-medium leading-none']) }}>
    {{ $value ?? $slot }}
</label>
