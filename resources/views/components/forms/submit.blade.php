<button {{
    $attributes->merge(['class' => $attributes->prepends('inline-block bg-amber-800 px-5 py-2 text-slate-300 font-lato font-semibold rounded transition-all uppercase tracking-wide')])->merge([
        'type' => 'submit'
    ])
}}>
    {{ $slot }}
</button>