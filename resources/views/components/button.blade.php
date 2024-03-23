<button
    {{ $attributes->class(['inline-flex items-center justify-center whitespace-nowrap rounded-md bg-teal-500 px-4 py-2 text-sm font-medium text-white shadow transition-colors hover:bg-teal-600 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-teal-800 disabled:pointer-events-none disabled:opacity-50'])->merge(['type' => 'button']) }}>
    {{ $slot }}
</button>
